<?php
/*
 * 文章前台控制类
 * 功能包括：
 * 1.获取文章列表：可分页、上一页、下一页
 * 2.获取文章详情
 * 3.搜索文章
 * 4.获取文章评论列表
 * 5.
 * */
if(!defined('ROOT_PATH'))exit('Access denied!');



class memberController extends QController
{
    public $memberObj;     //在构造函数中设置

    public function __construct()
    {
        parent::__construct();
        //获取文章模型管理对象
        QApplication::syModelManager('memberModelManager',$this->memberObj);
    }

    //会员中心首页，显示个人资料，最新通知等基本信息
    public function index()
    {

		$member = $this->islogin();
        //或许该会员目前信息
        $where = array(
            'id' =>$member['uid'],
        );
        $info = $this->memberObj->findOne('*',$where);

        $this->assign('info',$info);
        $this->display('member/index.html');

    }

	public function ajax_reglogin()
	{
		if(!isset($_SESSION['uid']) || $_SESSION['uid'] == null)
        {
            echo '<a href="index.php?c=member&a=reg">注册</a> / <a href="index.php?c=member&a=login">登录</a>';
            exit;
        }
		else
		{
			echo '<a style="width: 100%;" href="index.php?c=member">'.$_SESSION['username'].'</a>';
			exit;
				
		}
	}
	
    /*检查会员是否登录，返回bool，如果没有登录，在这个函数中直接进行登录的处理
     *2014-03-27晚上，想到，当会员登录的时候，可以返回该会员的信息
     */
    protected function islogin()
    {
        //除了检测 session还要检测 cookie是否存在
//        if(isset($_COOKIE['username']) && $_COOKIE['username'] == $_SESSION['username'])
//        {
//
//        }

        if(!isset($_SESSION['uid']) || $_SESSION['uid'] == null)
        {
            echo "<script>alert('对不起，请登录后再执行操作！');window.location.href='index.php?c=member&a=login'</script>";
            exit;
        }
        else
        {
            /*从数据库中根据 userid获取该会员的所属组，并附带他的其他需要信息返回，
             * 可以在publish中判断会员组的等级，来决定发布的内容是否可以直接审核
             */
           //  $gid = 2; //还没有去写member_group 的模型和模型管理类等，2是中级会员

            /*从数据库中获取更多信息*********************
            $where = array(
                'id'=>$_SESSION['uid'],
            );
            $res = $this->memberObj->findOne('id,username,gid',$where);
            $member = array(
                'uid'=>$res['id'],
                'username'=>$res['username'],
                'gid'=>$res['gid'],
            );
            */
            $member = array(
                'uid'=>$_SESSION['uid'],
                'username'=>$_SESSION['username'],
                'gid'=>2,//临时固定赋值为2啦，以后再来扩展这个功能,
            );
            return $member;
        }
    }

    public function ajax_islogin()
    {
        //
        if(!isset($_SESSION['uid']) || $_SESSION['uid'] == null)
        {
            echo "2";   //没有登录

        }
        else
        {
            echo '1';   //已经登录
        }
        exit;
    }

    //个人资料修改页面
    public function profile_eidt()
    {
        $member = $this->islogin();
        //或许该会员目前信息
        $where = array(
            'id' =>$member['uid'],
        );
        $info = $this->memberObj->findOne('*',$where);
//        vd($info);
        $this->assign('info',$info);
        $this->display('member/profile_edit.html');
    }

    //个人资料修改
    public function profile_eidt_save()
    {
        $member = $this->islogin();
        $data = array(
            'nickname' => $_POST['nickname'],
            'litpic' => $_POST['litpic'],
            'email' => $_POST['email'],
            'sex' => $_POST['sex'],
            'grade' => $_POST['grade'],
            'description' => $_POST['description'],
        );
        $where = array('id'=>$member['uid']);
        $res = $this->memberObj->data($data)->update($where);
        if($res)
        {
            echo "<script>alert('修改成功！');window.location.href='index.php?c=member&a=profile'</script>";
            exit;
        }
        else
        {
            echo "<script>alert('修改失败，返回重新设置！');history.go(-1);</script>";
            exit;
        }
    }

    //会员密码修改页面
    public function password_eidt()
    {
        $this->display('member/password_edit.html');
    }

    //会员密码修改
    public function password_eidt_save()
    {
        $member = $this->islogin();

        //首页要判断原始密码是否正确
        $where = array(
            'id' => $member['uid'],
            'password' => md5($member['username'].md5($_POST['oldpassword'])),
        );
        $res = $this->memberObj->findOne(' count(id) as num',$where);
        if($res['num'] != 1)
        {
            echo "<script>alert('原密码输入错误！');history.go(-1);</script>";
            exit;
        }

        //再次检查 新密码是否一致
        if($_POST['newpassword'] !== $_POST['newpassword2'])
        {
            echo "<script>alert('两次新密码输入不一致！');history.go(-1);</script>";
            exit;
        }

        //执行更新操作
        $data = array(
            'password' => md5($member['username'].md5($_POST['newpassword'])),
        );
        $where = array(
            'id' => $member['uid'],
        );
        $res = $this->memberObj->data($data)->update($where);;

        if($res)
        {
            unset($_SESSION['uid']);
            unset($_SESSION['username']);
            setcookie('username',"",time()-36000,'/');
            echo "<script>alert('密码修改成功，请重新登录！');window.location.href='index.php?c=member&a=login'</script>";
            exit;
        }
        else
        {
            echo "<script>alert('密码修改失败！');history.go(-1);</script>";
            exit;
        }
    }

    //发布物品信息
    public function publish()
    {
        $this->islogin();

        //获取物品模型的所有分类
        $categoryAllList = $this->getCategory();

        $this->assign('categoryAllList',$categoryAllList);

        $this->display('member/publish.html');
    }

    //发布物品信息
    public function publish_save()
    {
//        vd($_POST);

        $isshow = 0;//默认发布是需要审核的
        //会员是中级会员或以上可以免审
        $member = $this->islogin();
        if($member['gid'] >= 2)
        {
            $isshow = 1;
        }
        //重新整理数据
        $data = array(
            'cid' => $_POST['cid'],
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'currentprice' => $_POST['currentprice'],
            'newdegree' => $_POST['newdegree'],
            'litpic' => $_POST['litpic'],
            'detail' => $_POST['detail'],
            'isshow' => $isshow,  //默认发布为0
            'userid' => $member['uid'],
            'addtime' => time(),
            'updatetime' => time(),

        );

        /**
         * 说明一下，之前呢，我用的是下面这句话，意思是用info的模型管理对象，先设置data，再走add——info步骤，发生了一点问题，就是
         * 当POST过来的数据有数组时候，需要进行序列化或者join之类的处理，我认为这部分处理应该在add_info函数中进行之后，再运行data()
         *        $this->infoObj->data($data)->add_info();
         */
        QApplication::syModelManager('infoModelManager',$infoObj);
        $res = $infoObj->add_info($data);
        if($res) QApplication::message('发布成功!','index.php?c=member&a=published');
        else QApplication::message('发布失败，请检查后重新发布！');
    }

    public function published()
    {
        $member = $this->islogin();
        //从物品信息表中获取 userid为 本登录用户id的列表
        QApplication::syModelManager('infoModelManager',$infoObj);

        $where = array('userid'=>$member['uid']);
        $info_list = $infoObj->getInfoList($where,null,'id,cid,title,description,litpic,isshow,addtime,trait');
//        vd($info_list);
        $this->assign('infoList',$info_list);

        $this->display('member/published.html');

    }

    //修改发布信息
    public function infoedit()
    {
        $this->islogin();
        //
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        if($id == '')
        {
            //报错
            QApplication::message('参数错误');
        }

        QApplication::syModelManager('infoModelManager',$infoObj);
        $info = $infoObj->getInfoById($id);
        $this->assign('info',$info);
        //vd($info);

        //获取物品模型的所有分类
        $categoryAllList = $this->getCategory();
        $this->assign('categoryAllList',$categoryAllList);
//        vd($categoryAllList);


        $this->display('member/infoedit.html');
    }

    //提价保存
    public function info_eidt_save()
    {
        $isshow = 0;//默认发布是需要审核的
        //会员是中级会员或以上可以免审
        $member = $this->islogin();
        if($member['gid'] >= 2)
        {
            $isshow = 1;
        }

        //重新整理数据
        $data = array(
            'cid' => $_POST['cid'],
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'currentprice' => $_POST['currentprice'],
            'newdegree' => $_POST['newdegree'],
            'litpic' => $_POST['litpic'],
            'detail' => $_POST['detail'],
            'isshow' => $isshow,  //默认发布为0
            'userid' => $member['uid'],
            'updatetime' => time(),
        );

        /**
         * 说明一下，之前呢，我用的是下面这句话，意思是用info的模型管理对象，先设置data，再走add——info步骤，发生了一点问题，就是
         * 当POST过来的数据有数组时候，需要进行序列化或者join之类的处理，我认为这部分处理应该在add_info函数中进行之后，再运行data()
         *        $this->infoObj->data($data)->add_info();
         */
        QApplication::syModelManager('infoModelManager',$infoObj);
        $where = array('id'=>$_POST['id']);
        $res = $infoObj->update_info($data,$where);
        if($res) QApplication::message('update success!',"index.php?c=member&a=published");
        else QApplication::message('update fail!');

    }

    //删除发布信息
    public function infodel()
    {
        //获取id参数，是从ajaxpost而来的
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        if($id == '')
        {
            //报错
            $this->msg('参数不正确！'.$id,2);
        }
        QApplication::syModelManager('infoModelManager',$infoObj);
        $where = array('id'=>$id);
        $res = $infoObj->delete($where);
        if($res)
        {
            $this->msg('删除成功！',1);
        }
        else
        {
            $this->msg('删除失败！',2);
        }
        QApplication::syModelManager('infoModelManager',$infoObj);
//        echo "删除成功！";

    }

    private function getCategory()
    {
        //获取物品模型的所有分类
        $category_list = $this->categoryObj->getCategoryListForSelect('info',null);
        return $category_list;
//      vd($categoryAllList);

    }

    public function reg()
    {
        $this->display('member/reg.html');
    }

    public function reg_save()
    {

        //此处进行验证码的匹配
//        vd($_POST['vercode']);
        if($_POST['vercode'] == '')
        {
            QApplication::message('请填写验证码',false);
        }

        if(strtolower($_POST['vercode']) != $_SESSION['vercode'])
        {
            QApplication::message('请正确填写验证码');
        }


        //在此处进行数据的过滤、密码的md5加密，去掉vercode
        $data = array(
            'username' => $_POST['username'],
            //我的加密方法是 先md5原始密码，然后和用户名组合之后再一次md5
            'password' => md5($_POST['username'].md5($_POST['password'])),
            'mobile' => $_POST['mobile'],
            'addtime' => time(),
        );
        $this->memberObj->data($data)->insert($data);
    }

    public function login()
    {
        $this->display('member/login.html');
    }

    //login主要是验证和session的一个过程吗
    public function login_save()
    {
        //检测不就先不写了，都会放到以后的QFilter类中，他会根据model中rule，再结合QError进行返回
        //vd($_POST);

        //此处进行验证码的匹配
        if($_POST['vercode'] == '')
        {
            QApplication::message('请填写验证码',false);
        }

        if(strtolower($_POST['vercode']) != $_SESSION['vercode'])
        {
            QApplication::message('请正确填写验证码');
        }

        $username = $_POST['username'];
        $password = md5($_POST['username'].md5($_POST['password']));
        $where = array('username'=>$username,'password'=>$password); //建议条件都写成数组，这样的话，会自动在字段值的两边加上引号
        $res = $this->memberObj->findOne('id',$where,null);
        if($res != null)
        {
            $_SESSION['uid'] = $res['id'];
            $_SESSION['username'] = $username;

            //检查是否选择了下次直接登录设置cookie
            if(isset($_POST['rememberme']) && $_POST['rememberme'] == 1)
            {
                setcookie('username',$username,time()+120,'/');
            }

            echo "<script>alert('登录成功！');window.location.href='index.php?c=member&a=publish'</script>";
            exit;
        }
        else
        {
            echo "<script>alert('登录失败，输入正确的用户名和密码！');history.go(-1);</script>";
            exit;
        }

    }

    //会员退出登录
    public function logout()
    {
        unset($_SESSION['uid']);
        unset($_SESSION['username']);
        setcookie('username',"",time()-36000,'/');
        echo "<script>alert('退出登录成功！');window.location.href='index.php'</script>";
    }



    //申请推荐
    public function apply_trait()
    {
        //获取信息编号
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        if($id == '')
        {
            //报错
            $this->msg('参数不正确！',2);
        }

        $data = array(
            'trait' => $_POST['trait'],
        );
        $where = array('id'=>$id);
        QApplication::syModelManager('infoModelManager',$infoObj);
        $res = $infoObj->data($data)->update($where);
        if($res)
        {
            $this->msg('申请推荐位成功！',1);
        }
        else
        {
            $this->msg('申请推荐位失败！',2);
        }
    }

    //信息问询
    public function addAsk()
    {
        $member = $this->islogin();

        /*接收到 ask传来的信息编号、信息发布者编号、问询内容
        *注意 两个编号是get过来的，问询内容是post过来的
        */
        /*其实问询ask就是评论的一种啦，我建立的名字就叫comment的，就这样吧，
         *如果以后真有必要，那就直接添加一个字段，来表明类型就好了。
         * 获取评论对象，添加进去
         *
         * 要求必须是登陆了才能发布问询吗？是的！因为我在里面设置了，不然就可以通过问询给卖家骂人了啊。。。
         * 既然是登陆检测的话，那为什么不把这个方法写在 member控制器里面呢？
        */
//        vd($_POST['content']);
        $data = array(
            'infoid' => $_GET['infoid'],
            'touid' => $_GET['userid'],
            'fromuid' => $member['uid'],
            'title' => '问询',
            'content' => $_POST['content'],
            'addtime' => time(),
        );
//        vd($data);
        QApplication::syModelManager('commentModelManager',$commentObj);
        $res = $commentObj->data($data)->insert();
        if($res)
        {
            QApplication::message('添加问询成功!');
        }
        else
        {
            QApplication::message('添加问询失败!');
        }
    }

    //我的商品问询列表
    public function asks()
    {
        $member = $this->islogin();
        QApplication::syModelManager('commentModelManager',$commentObj);
        $where = array(
            'touid' => $member['uid'],
        );
        $asks = $commentObj->findAll($where,'addtime DESC ');
        $this->assign('infoList',$asks);
        $this->display('member/asks.html');
    }
}
?>
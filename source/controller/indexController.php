<?php
/*
 * 默认
 * */

if(!defined('ROOT_PATH'))exit('Access denied!');

class indexController extends QController
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        QApplication::syModelManager('infoModelManager',$infoObj);

        //获取 5 条 最新信息
        $where = " isshow = 1 ";    //isshow为审核过的
        $info_list = $infoObj->getInfoList($where,null,null,5); //将filed 和
        $this->assign('infoList',$info_list);

        //获取推荐信息
        $where = " isshow = 1 AND trait = 1 ";
        $info_trait_list = $infoObj->getInfoList($where);
        $this->assign('infoTraitList',$info_trait_list);

        //获取系统通知列表
        QApplication::syModelManager('articleModelManager',$articleObj);
        $where = " isshow = 1 AND cid = 1 ";
        $articleList = $articleObj->getArticleList($where,null,'id,cid,title,addtime,isshow',5);
        $this->assign('articleList',$articleList);

        $this->display('index.html');
    }
}
?>
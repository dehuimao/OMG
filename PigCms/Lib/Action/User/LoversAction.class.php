<?php
class LoversAction extends LotteryBaseAction{
    public $lotteryType;
    public $lotteryTypeName;
    public function _initialize(){
        parent :: _initialize();
        $this -> lotteryType = 8;
        $this -> lotteryTypeName = '摁死小情侣';
        $this -> assign('lotteryTypeName', $this -> lotteryTypeName);
    }
    public function index(){
        parent :: index($this -> lotteryType);
        $this -> display();
    }
    public function add(){
        parent :: add($this -> lotteryType);
    }
    public function edit(){
        parent :: edit($this -> lotteryType);
    }
    public function detail(){
        $lid = (int)$_GET['id'];
        $list = M('Lottery_record') -> where(array('token' => $this -> token, 'lid' => $lid)) -> order('time DESC') -> field('wecha_name,time,phone,usenums') -> select();
        foreach($list as $k => $v){
            if($v['wecha_name'] == ''){
                $list[$k]['wecha_name'] = '游客';
            }
        }
        $this -> assign('list', $list);
        $this -> display();
    }
}
?>
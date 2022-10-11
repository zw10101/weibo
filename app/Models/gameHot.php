<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gameHot extends Model
{
    public $timestamps = false;
    
    const GAME_LIST = [
        'ddz' => '斗地主',
        'zhajinhua' => '扎金花',
        'dzpk' => '德州扑克',
        'niuniuqz' => '牛牛',
        'sangong' => '三公',
        'baccarat' => '百家乐',
        'niuniubr' => '牛牛百人',
        'lhd' => '龙虎斗',
        'zhajinhuabr' => '红黑大战',
        'bmw' => '奔驰宝马',
        'fishing' => '捕鱼达人',
        'erbagang' => 'erbagang',
        'hongbao' => '抢红包',
        'fish_194' => '欢乐捕鱼',
        'slot_65' => '水果机',
        'slot_66' => '财神到',
        'slot67' => '水浒传',
        'fish_195' => '摇钱树捕鱼',
        'fish_196' => '海王捕鱼',
        'lottery_68' => '印尼分分彩',
        'lottery_69' => '奇趣分分彩',
        'niuniukp' => '看牌牛牛',
        'slot_70' =>'星爆',
        'slot_71' =>'5狮',
        'slot_72' =>'真理之书',
        'slot_73' =>'多财多福',
        'slot_74' =>'黄金狼',
        'battle_75' =>'天籁',
        'slot_76' =>'鱼虾蟹',
        'slot_78' =>'TaiXiu',
    ];

    const CACHE_KEY = 'game_hot_status';
}

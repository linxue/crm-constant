<?php

namespace CrmConstant\Ecmall;

/**
 * 公域平台的配置常量
 */
class GlobalPlatformConstant
{

    /**
     * 美大 [平台ID]
     */
    const MEI_TUAN = 1;

    /**
     * 抖音 [平台ID]
     */
    const DOU_YIN = 2;

    /**
     * 小红书 [平台ID]
     */
    const XIAO_HONG_SHU = 3;

    /**
     * 公域平台ids
     */
    const IDS = [ 
        self::MEI_TUAN,
        self::DOU_YIN,
        self::XIAO_HONG_SHU,
    ];

    /**
     * 公域平台列表
     */
    const GLOBAL_PLATFORM = [
        self::MEI_TUAN => "美大",
        self::DOU_YIN => "抖音",
        self::XIAO_HONG_SHU => "小红书",
    ];

    /**
     * 公域平台列表
     */
    const LIST = [
        [
            'platfrom_id' => self::MEI_TUAN,
            'name' => '美大',
            'icon_tag' => 'meituan',
            'valid_flag' => 1,
        ],

        [
            'platfrom_id' => self::DOU_YIN,
            'name' => '抖音',
            'icon_tag' => 'douyin',
            'valid_flag' => 1,
        ],

        [
            'platfrom_id' => self::XIAO_HONG_SHU,
            'name' => '小红书',
            'icon_tag' => 'xiaohongshu',
            'valid_flag' => 1,
        ],
    ];

    


}
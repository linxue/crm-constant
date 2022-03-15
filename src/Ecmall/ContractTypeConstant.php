<?php

namespace CrmConstant\Ecmall;

/**
 * 合同版本 配置常量
 */
class ContractTypeConstant
{
    /**
     * 套餐:季度
    */
    const MEAL_QUARTER = 3;

    /**
     * 套餐:半年
    */
    const MEAL_HALF_YEAR = 6;

    /**
     * 套餐:年版
    */
    const MEAL_YEAR = 12;

    /**
     * 套餐:一年半版
    */
    const MEAL_YEAR_ADD_HALF = 18;

    /**
     * 公域合同版本服务期-月份列表
     */
    const GLOBAL_VERSION_MONTHS = [ 
        self::MEAL_QUARTER,
        self::MEAL_HALF_YEAR,
        self::MEAL_YEAR,
        self::MEAL_YEAR_ADD_HALF,
    ];

    /**
     * 合同版本月份默认值0
     */
    const VERSION_MONTH_ZERO = 0;

}
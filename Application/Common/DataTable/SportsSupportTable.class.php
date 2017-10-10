<?php
/**
 * SportsSupport数据模型
 */
class SportsSupportTable {
	// 数据表模型配置
	public $config = [
			'name' => 'sports_support',
			'title' => '球队支持记录',
			'search_key' => '',
			'add_button' => 1,
			'del_button' => 1,
			'search_button' => 1,
			'check_all' => 1,
			'list_row' => 20
	];
	
	// 列表定义
	public $list_grid = [
			'' => [
					'title' => '',
					'function' => '',
					'width' => '',
					'sort' => '',
					'href' => [ ]
			]
	];
	
	// 字段定义
	public $fields = [
			'id' => [
					'title' => '主键',
					'field' => 'int(10) unsigned NOT NULL',
					'type' => 'string',
					'is_must' => 1
			],
			'sports_id' => [
					'title' => '场次ID',
					'field' => 'int(10) NULL',
					'type' => 'num'
			],
			'team_id' => [
					'title' => '球队ID',
					'field' => 'int(10) NULL',
					'type' => 'num'
			],
			'follow_id' => [
					'title' => '用户ID',
					'field' => 'int(10) NULL',
					'type' => 'num'
			],
			'cTime' => [
					'title' => '支持时间',
					'field' => 'int(10) NULL',
					'type' => 'datetime'
			]
	];
}	
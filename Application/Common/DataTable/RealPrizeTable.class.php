<?php
/**
 * RealPrize数据模型
 */
class RealPrizeTable {
	// 数据表模型配置
	public $config = [
			'name' => 'real_prize',
			'title' => '实物奖励',
			'search_key' => '',
			'add_button' => 1,
			'del_button' => 1,
			'search_button' => 1,
			'check_all' => 1,
			'list_row' => 20
	];
	
	// 列表定义
	public $list_grid = [
			'prize_name' => [
					'title' => '奖品名称',
					'function' => '',
					'width' => '',
					'sort' => '',
					'href' => [ ]
			],
			'prize_conditions' => [
					'title' => '活动说明',
					'function' => '',
					'width' => '',
					'sort' => '',
					'href' => [ ]
			],
			'prize_count' => [
					'title' => '奖品个数',
					'function' => '',
					'width' => '',
					'sort' => '',
					'href' => [ ]
			],
			'prize_type' => [
					'title' => '奖品类型',
					'function' => '',
					'width' => '',
					'sort' => '',
					'href' => [ ]
			],
			'use_content' => [
					'title' => '使用说明',
					'function' => '',
					'width' => '',
					'sort' => '',
					'href' => [ ]
			],
			'urls' => [
					'title' => '操作',
					'function' => '',
					'width' => '',
					'sort' => '',
					'href' => [
							'0' => [
									'title' => '编辑',
									'url' => '[EDIT]'
							],
							'1' => [
									'title' => '删除',
									'url' => '[DELETE]'
							],
							'2' => [
									'title' => '查看数据',
									'url' => 'address_lists?target_id=[id]'
							],
							'3' => [
									'title' => '预览',
									'url' => 'preview?id=[id]&target=_blank'
							]
					]
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
			'prize_name' => [
					'title' => '奖品名称',
					'field' => 'varchar(255) NULL',
					'type' => 'string',
					'is_show' => 1,
					'is_must' => 1
			],
			'prize_conditions' => [
					'title' => '活动说明',
					'field' => 'text NULL',
					'type' => 'textarea',
					'remark' => '奖品说明',
					'is_show' => 1,
					'is_must' => 1
			],
			'prize_count' => [
					'title' => '奖品个数',
					'field' => 'int(10) NULL',
					'type' => 'num',
					'is_show' => 1,
					'is_must' => 1,
					'validate_rule' => '/^[0-9]*$/',
					'validate_time' => 3,
					'error_info' => '奖品个数不能小于0',
					'validate_type' => 'regex'
			],
			'prize_image' => [
					'title' => '奖品图片',
					'field' => 'varchar(255) NULL',
					'type' => 'picture',
					'value' => '上传奖品图片',
					'is_show' => 1,
					'is_must' => 1
			],
			'token' => [
					'title' => 'token',
					'field' => 'varchar(255) NULL',
					'type' => 'string',
					'auto_rule' => 'get_token',
					'auto_time' => 1,
					'auto_type' => 'function'
			],
			'prize_type' => [
					'title' => '奖品类型',
					'field' => 'tinyint(2) NULL',
					'type' => 'radio',
					'value' => 1,
					'remark' => '选择奖品类型',
					'is_show' => 1,
					'extra' => '1:实物
0:虚拟',
					'is_must' => 1
			],
			'use_content' => [
					'title' => '使用说明',
					'field' => 'text NULL',
					'type' => 'textarea',
					'remark' => '用户领取成功后才会看到',
					'is_show' => 1,
					'is_must' => 1
			],
			'prize_title' => [
					'title' => '活动标题',
					'field' => 'varchar(255) NULL',
					'type' => 'string',
					'is_show' => 1,
					'is_must' => 1
			],
			'fail_content' => [
					'title' => '领取失败提示',
					'field' => 'text NULL',
					'type' => 'textarea',
					'remark' => '用户领取失败，或者没有领取到时看到的提示',
					'is_show' => 1,
					'is_must' => 1
			],
			'template' => [
					'title' => '素材模板',
					'field' => 'varchar(255) NULL',
					'type' => 'string',
					'value' => 'default',
					'is_show' => 1
			]
	];
}	
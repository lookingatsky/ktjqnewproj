<?php 
return array(
	array(
		'id' => '1',
		'homePage' => '11',
		'menu' => array(
					array(
						'text' => '个人中心',
						'items' => array(
							array(
								'id' => '11',
								'text' => '欢迎页',
								'href'=> admin_url('main/index')
							),
							array(
								'id' => '12',
								'text' => '密码修改',
								'href'=> admin_url('main/password')
							),
						),
					),
				),
			),
	
	array(
		'id' => '2',
		'menu' => array(
					array(
						'text' => '全局设置',
						'items' => array(
							array(
								'id' => '211',
								'text' => '网站设置',
								'href'=> admin_url('main/sysconfig')
							),
							array(
								'id' => '212',
								'text' => '友情链接管理',
								'href'=>'#'
							),
							array(
								'id' => '213',
								'text' => '内容图片管理',
								'href'=>'#'
							),
							array(
								'id' => '214',
								'text' => '日志管理',
								'href'=>'#'
							),
							array(
								'id' => '215',
								'text' => '接口状态',
								'href' => '#'
							),
							array(
								'id' => '215',
								'text' => '清除缓存',
								'href' => '#'
							),
						),
					),
					array(
						'text' => '权限管理',
						'items' => array(
							array(
								'id' => '221',
								'text' => '用户组管理',
								'href' => admin_url('roler/group_list')
							),
							array(
								'id' => '222',
								'text' => '用户管理',
								'href' => admin_url('roler/group_info')
							),
						),
					),
				),
	)
);


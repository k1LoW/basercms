<?php
/* SVN FILE: $Id$ */
/**
 * インストール完了メール
 *
 * PHP versions 4 and 5
 *
 * BaserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2010, Catchup, Inc.
 *								9-5 nagao 3-chome, fukuoka-shi
 *								fukuoka, Japan 814-0123
 *
 * @copyright		Copyright 2008 - 2010, Catchup, Inc.
 * @link			http://basercms.net BaserCMS Project
 * @package			baser.plugins.blog.views
 * @since			Baser v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>

                                           <?php echo date('Y-m-d H:i:s') ?> 
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　　　　　　◆◇　BaserCMSのインストールが完了しました　◇◆
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

　おめでとうございます！
　次のURLへBaserCMSのインストールが完了しました。
　<?php echo $siteUrl ?> 

━━━━◇◆━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　◆ ログイン情報
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━◆◇━━━━
管理ページ： <?php echo topLevelUrl(false).Configure::read('App.baseUrl').'/admin/users/login' ?> 
アカウント： <?php echo $name ?>　
パスワード： <?php echo $password ?>　

※ パスワードはユーザー管理より変更する事ができます。
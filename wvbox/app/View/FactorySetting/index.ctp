<?php echo $this->Html->css('factorySetting.index'); ?> 

<h2>
初期アカウントと暗証番号が共通のため。
<p/>
インタネットのサービスを公開する前に、必ず設定してください。
</h2>
<h2>
本ページ適用範囲：
<h3>
本製品購入、初めての設定。
</h3>
<h3>
ROM書き込み
</h3>
</h2>

<h2>
設定方法
<h3>
	<?php
		echo $this->Html->link(__('USBキーボード＋HDMI対応モニターまたはテレビを使って、設定。', true), 
		array('controller' => 'factorySetting', 'action' => 'usbkeyboard_hdmi'), array());
	?>
</h3>
<h3>
	<?php
		echo $this->Html->link(__('有線LAN＋SSHクライアントパソコンを使って、設定。', true), 
		array('controller' => 'factorySetting', 'action' => 'usbkeyboard_hdmi'), array());
	?>
</h3>
</h2>





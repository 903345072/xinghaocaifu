<?php foreach ($data as $userCharge) :?>
<li class="mui-table-view-cell">
	<div class=mui-table>
		<div class="mui-table-cell uk-text-middle uk-width-em-2">
			<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABQVBMVEV/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf+Awf+Awv+Bwv+Ew/+ExP+FxP+GxP+Hxf+Ixf+Jxv+Kxv+OyP+PyP+Pyf+Syv+Ty/+Uy/+WzP+Zzf+Zzv+azv+bzv+cz/+dz/+f0f+g0f+h0f+j0v+j0/+l0/+p1v+x2f+y2v+z2v+12/+23P+63v+83//A4f/B4f/C4v/O5//Q6P/V6//X6//Z7f/a7v/b7v/c7v/f7//f8P/h8P/h8f/i8f/j8f/k8v/l8v/m8//n9P/o9P/p9P/p9f/v9//w+P/x+P/3+//4/P/5/P/8/v////8mRVTPAAAAJHRSTlMAAQkLDA0XIlNUWVqEjo+Qk5WsrcXGyNbX2Ofo6er29/j5/P4edPtIAAABZUlEQVQoz4WT11ICURBEhyCLgoAoroiCLAfXhCjBiAkjYs5ZzOH/P8AHlmJXoDgv96Grpub2dIvUcLkDfRFNi/QF3C75h03xhqMYRMNexWZW7V1qAhMJ1WOvq05fjH/EfM6a6ghqNKAFHcbk7iYqaD67iIjNE6MpMY9NRBSVFqiKiHgTkLl5f7PycQAJr4grDCy/L81bKd0DYZe4o0ChUh+ZBGDjFoi6pQeg8JIEyG7pZPcAKN4BBKQfIF85ngYyF6XZy30gufZ8BBCSYYDR/HlZh/HNt8eTPJB+3U0BDIlhycpVGoqfP7/fFR2K12NVayyyPrl+MzNBXR4xhufOyjqs3r18PZzqkH7dSQFELKtNLWw/rc6ZVuu3fAxyh+NYPtZptUU33pothqmLLUytnuS21UnaHbRNHMTuax4mvxFWR2+zKPY6alHt8DcG2d9hrsGAtQYD5hq0K5FRwdBgPB4JmSv4B+ahfFJASuhwAAAAAElFTkSuQmCC">
		</div>
		<div class="mui-table-cell uk-text-middle" style="padding-left: 10px;">
			<div class=mui-ellipsis>
				<p>￥<?= $userCharge->amount ?></p>
				<p style="font-size: 12px">充值订单号：<?= $userCharge->trade_no ?></p>
				<p style="font-size: 12px">充值时间：<?= $userCharge->created_at ?></p>
				<p style="font-size: 12px">来源:<?= $userCharge->chargeTypeValue ?></p>
			</div>
		</div>
	</div>
</li>
<?php endforeach ?>
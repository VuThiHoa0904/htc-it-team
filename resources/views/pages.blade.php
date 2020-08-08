<?php $pages = TCG\Voyager\Models\Page::first(); ?>
@can('browse',$pages)
    You can browse pages
@elsecan('edit',$pages)
    You can edit pages
@elsecan('add',$pages)
    You can add pages
@else
    you can't have permission
@endcan

<p><span style="color: #ffffff;"><span
            style="box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; display: block; font-size: 16px; font-family: Lora, sans-serif;"><i class="fa fa-map-marker" aria-hidden="true"></i>  Số 65, Đ. Ho&agrave;ng Văn Thụ, P. Phan Đ&igrave;nh Ph&ugrave;ng, TP. Th&aacute;i Nguy&ecirc;n</span></span>
</p>
<p><span style="color: #ffffff;"><span
            style="box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; display: block; font-size: 16px; font-family: Lora, sans-serif;"><i class="fa fa-phone" aria-hidden="true"></i>  0988 888 999</span><span
            style="box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; display: block; font-size: 16px; font-family: Lora, sans-serif;"><i class="fa fa-envelope-o" aria-hidden="true"></i>  htcenter@htcenter.edu.vn</span><span
            style="box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; display: block; font-size: 16px; font-family: Lora, sans-serif;"><i class="fa fa-plus-circle" aria-hidden="true"></i>  htc-it.team</span></span>
</p>

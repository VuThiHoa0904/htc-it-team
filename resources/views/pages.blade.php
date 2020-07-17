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

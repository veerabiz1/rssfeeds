@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">RSS FEEDS</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<?php
                     if(!empty($feeds)) {
                        $i=0;                       
                        foreach ($feeds->entry as $feed_item) {
                        if($i>=10) break;
                        ?>
                        <div><a class="feed_title" href="<?php echo $feed_item->link['href']; ?>"><?php echo $feed_item->title; ?></a></div>
                        <div>Author:<?php echo  $feed_item->author->name; ?></div>
                        <div>Posted On:<?php echo  $feed_item->updated; ?></div>
                        <div><?php echo $feed_item->summary; ?></div>
                        <?php		
                        $i++;	
                        }}  
 ?>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

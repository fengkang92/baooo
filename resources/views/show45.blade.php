@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak style="background-color: #fff">
		<div class="container">
            <div class="container">

                <div class="row mt-32">
                    <div class="col-md-12 txt-align-c mh1 mb-30">雅居乐剑桥郡推广策略提案</div>
                </div>
                <div class="row">
                    <div class="col-md-12 txt-align-c mb-30">
                        <div id="id_video_container_9031868223219491944" style="width:1000px;height:562px;"></div><script src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"></script> <script type="text/javascript"> (function(){ var option ={"auto_play":"0","file_id":"9031868223219491944","app_id":"1253974651","width":1000,"height":562,"https":1}; /*调用播放器进行播放*/ new qcVideo.Player( /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/ "id_video_container_9031868223219491944", option ); })() </script>
                    </div>
                </div>

                <div class="row mt-32">
                    <div class="col-md-12 txt-align-c mh1 mb-30">雅居乐十年小雅</div>
                </div>
                <div class="row">
                    <div class="col-md-12 txt-align-c mb-30">
                        <div id="id_video_container_9031868223219491976" style="width:1000px;height:562px;"></div><script src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"></script> <script type="text/javascript"> (function(){ var option ={"auto_play":"0","file_id":"9031868223219491976","app_id":"1253974651","width":1000,"height":562,"https":1}; /*调用播放器进行播放*/ new qcVideo.Player( /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/ "id_video_container_9031868223219491976", option ); })() </script>
                    </div>
                </div>

                <div class="row mt-32">
                    <div class="col-md-12 txt-align-c mh1 mb-30">雅居乐中山凯茵新城</div>
                </div>
                <div class="row" style="margin-bottom: 100px">
                    <div class="col-md-12 txt-align-c mb-30">
                        <div id="id_video_container_9031868223219491980" style="width:1000px;height:562px;"></div><script src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"></script> <script type="text/javascript"> (function(){ var option ={"auto_play":"0","file_id":"9031868223219491980","app_id":"1253974651","width":1000,"height":562,"https":1}; /*调用播放器进行播放*/ new qcVideo.Player( /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/ "id_video_container_9031868223219491980", option ); })() </script>
                    </div>
                </div>
                
            </div>
        </div>
	</div>
	<script>
	var indexVue = new Vue({
		el:"#indexpage",
		data:{
			c1show:false,
		},
		methods:{
			showc1:function() {
				this.c1show = !this.c1show;
			}
		}
	});
	</script>
@endsection

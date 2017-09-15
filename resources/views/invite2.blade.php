@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			<div class="row">
				<div class="col-md-12 txt-align-c mh1 mb-30">品牌互动营销</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mb-30">
					<div class="mcontent">
						<b style="letter-spacing: 2px;font-size:18px;">[北京]</b>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<b>客户经理</b>
						<p>岗位职责</p>
						<p>1、带领线上执行项目组为广告投放客户提供专业服务并协助其实现在公司DSP平台的市场传播目标；</p>
						<p>2、与客户进行及时的联系、沟通，准确为客户提供项目执行服务；</p>
						<p>3、有效领导活动项目组人员完成项目运作，把控团队工作进度和方向；</p>
						<p>4、监控线上广告投放活动效果、数据，及时根据客户的要求和市场反馈，向客户提供专业、合理的解决方案；</p>
						<p>5、统筹协调各支持部门间合作关系，确保为客户提供一流优质的服务；</p>
						<p>6、管理、带领项目组成员，对项目执行效果负最终责任。</p>
						<p>岗位要求</p>
						<p>1、大学本科以上学历，2年以上工作经验，1年以上带项目经验；</p>
						<p>2、具有优秀的人际沟通能力、极强执行力以及良好的分析与解决问题的能力；</p>
						<p>3、有一定的文案写作能力，熟练掌握Word、PPT、Excel等Office办公软件;</p>
						<p>4、性格开朗，形象气质佳，有较强的责任心，良好的个人综合素质；</p>
						<p>5、勇于承担责任、具备一定的抗压力；</p>
						<p>6、有品牌及互联网快消网站创意项目执行经验者优先。</p>
						<b>DSP优化经理</b>
						<p>岗位职责</p>
						<p>1、与客户进行良好沟通，跟踪、了解客户的需求，并将客户需求完整有效的传递给公司；</p>
						<p>2、负责客户DSP广告投放策略、方案及优化工作，合理引导客户的投放预期，把控投放节奏；</p>
						<p>3、与技术部门、创意团队、产品部门等进行沟通，负责广告素材的协调，上下线并跟踪优化； 完成每日、每周、每月的相关数据报表，进行业务总结及投放回馈，并能从数据报表中发掘问题所在，找到相关规律，指导竞价投放；</p>
						<p>4、独立完成账户管理、账户优化、数据报告反馈等；</p>
						<p>5、对所投放媒体进行研究总结，定期汇报；</p>
						<p>6、维护客户关系，致力于提高客户满意度。</p>
						<p>岗位要求</p>
						<p>1、有1-2年DSP广告公司投放实操经验；</p>
						<p>2、有较强的数据分析能力，对数据敏感，能够在海量数据中及时发现问题；</p>
						<p>3、责任心强，善于沟通，有计划性，工作效率高，能够充分理解客户投放需求，并能给出解决方案;</p>
						<p>4、有较好的服务意识，沟通能力，以及团队合作意识。</p>
						<b>新媒体运营</b>
						<p>岗位职责</p>
						<p>1、管理客户社交媒体、微信、微博日常运营及推广等相关工作；</p>
						<p>2、能够独立运营微信公众号，有较强的选题策划能力、独立产出优质图文内容；</p>
						<p>3、组织策划主题活动，并进行跟踪维护；</p>
						<p>4、负责新媒体平台推广效果的跟踪、数据分析和反馈及优化调整等工作；</p>
						<p>岗位要求</p>
						<p>1、本科及以上学历，传媒、新闻学、广告学、市场营销、房地产专业优先；</p>
						<p>2、三年以上工作经验；</p>
						<p>3、对社会化营销、内容营销、移动营销有深度认知，有自己的洞察和趋势判断，具有互联网思维能力，对热点事件、新闻动态等信息敏感，紧跟最新创意动向；</p>
						<p>4、优秀的文案能力，思维活跃能对图文内容进行改编或再创作；能针对专题进行话题、系列活动的策划及执行；善用线上线下的互动调动用户参与;</p>
						<p>5、熟悉新媒体传播方式，微信平台功能及口碑营销的执行操作流程;</p>
						<p>6、良好的沟通协调能力、出色的执行能力、很强的责任心、有强烈的工作激情、具有团队合作精神等 。</p>
					@{{this.c1show?'':'...'}}</div>
					<div  v-show="c1show" class="mcontent">
						<b>设计师</b>
						<p>岗位职责</p>
						<p>1、根据客户广告投放需求，对PC及移动端互联网广告的界面风格、交互设计、界面结构、操作流程等做出设计；</p>
						<p>2、负责项目中各种交互界面、图标、视频、按钮等相关元素的设计与制作；</p>
						<p>3、积极与开发沟通，推进界面及交互设计的最终实现；/p>
						<p>岗位要求</p>
						<p>1、2年以上设计经验，熟悉App及网页端、交互设计及视觉设计； </p>
						<p>2、关注用户体验，感知力强，具有优秀的用户体验设计能力，熟悉用户界面的设计，有成熟上线作品；   </p>
						<p>3、能独立完成各项设计项目，有自己独到的设计思路，保证设计作品的视觉完整性 ； </p>
						<p>4、良好的沟通能力，强烈的工作责任心及团队合作精神。</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c">
					<div class="mbtm_more" @click="this.showc1()">@{{this.c1show?'折叠全文':'展开全文'}}</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	var indexVue = new Vue({
		el:"#indexpage",
		data:{
			c1show:false,
			c2show:false,
			c3show:false,
			c4show:false
		},
		methods:{
			showc1:function() {
				this.c1show = !this.c1show;
			},
			showc2:function() {
				this.c2show = !this.c2show;
			},
			showc3:function(){
				this.c3show = !this.c3show;
			},
			showc4:function(){
				this.c4show = !this.c4show;
			}
		}
	});
	</script>
@endsection
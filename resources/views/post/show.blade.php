@extends('app')

@section('content')
    @include('partials._topbar')
    <div id="body-main" class="container">
        <div class="post-article">
            <article>
                <h1 class="post-title">
                    {{ $post->title }}
                </h1>

                <div class="meta">
                    <span class="item author">
                        文 / <a href="/news?uid=399516" target="_blank">程俊</a>
                    </span>
                    <span class="item time">2015年05月24日 15:54:13</span>
                    <span class="item">
                        <span class="fa fa-comment" style="vertical-align: 1px"></span>
                    </span>

                    <div class="pull-right">

                    </div>
                </div>
                <div class="post-content">
                    <p>在英美两大行会议纪要公布之后，市场焦点再度转向主要经济体基本面情况。美国第一季度实际GDP年面临下修风险或令美国加息前景蒙上阴影，中国工业企业利润疲软则或迫使稳增长的宽松政策继续维持。</p>

                    <p><strong>美GDP面临下修风险</strong></p>

                    <p>美国商务部此前公布的第一季度GDP初值仅录得0.2%的增长，寒冷的冬季和西海岸罢工所引发的贸易疲软导致GDP表现不佳。《华尔街日报》调查的经济学家预期认为修正值可能会下滑至-1.0%水平。如果数据的确如此，这将是2014年第一季度后美国经济最差单季表现。</p>

                    <p><a href="http://img.cdn.wallstreetcn.com/thumb/uploads/cb/19/c9/1.jpg"><img alt="1" src="http://img.cdn.wallstreetcn.com/thumb/uploads/cb/19/c9/1,w_640.jpg"></a></p>

                    <p>本月中旬公布的美国4月零售销售(除汽车)环比近增长0.1%，预期0.5%，前值0.4%修正为0.7%。数据公布之后，瑞士信贷分析师将美国二季度GDP预期从3.2%下调至2.6%。巴克莱也将美国二季度GDP增长预期从3.0%下调至2.6%。</p>

                    <p>美第一季度GDP修正值数据将于北京时间5月29日周五20:30公布。</p>

                    <p><strong>中国工业企业利润萎缩难止&nbsp;宽松预期延续？</strong></p>

                    <p>尽管第一季度中国规模以上工业企业利润同比下滑有所收窄，但是需求减弱所带来的工业生产增速放缓和主营业务收入增速下滑并未能得到改变。</p>

                    <p>民生宏观此前表示，&nbsp;总需求和物价下行压力以及企业主营业务收入不断下行，意味着战略稳增长政策会更加积极；而从成本端看，货币政策应继续宽松降低企业融资成本，降准降息仍可期待。&nbsp;</p>

                    <p><a href="http://img.cdn.wallstreetcn.com/thumb/uploads/b4/3e/75/2.png"><img alt="2" src="http://img.cdn.wallstreetcn.com/thumb/uploads/b4/3e/75/2,w_640.png"></a></p>

                    <p>北京时间周三(5月27日)09:30将公布中国4月规模以上工业利润数据，前值同比下滑0.4%。</p>

                    <p><strong>严查场外配资 部分券商或暂停相关接口影响几何？</strong></p>

                    <p><a href="http://wallstreetcn.com/node/218470">华尔街见闻</a>从多个渠道独家获悉，已有券商于5月22日紧急下发内部通知，要求全面自查自纠参与场外配资的相关业务，其中包括“与恒生电子签订协议利用 HOMS系统为客户间配资提供服务或便利”。该券商内部通知并要求从5月25日（即下周一）一律停止向场外配资提供数据端口服务。</p>

                    <p>其他券商则表示他们未采取类似的行动。</p>

                    <p>目前券商的融资融券业务规模超2万亿，各种形式的场外配资规模可能有1-1.5万亿，“一旦大量配资资金撤离，情形可能会非常恐怖。”一券商人士表示。</p>

                    <p>该消息对周一市场影响究竟如何，值得关注。</p>

                    <p><strong>美联储副主席领衔&nbsp;一众官员透露心声？</strong></p>

                    <p>美联储副主席费希尔将在周二在特拉维夫大学就“美联储和世界经济”作主题演讲。此外，克利夫兰联储主席Loretta&nbsp;Mester、里奇蒙德联储主席Jeffrey&nbsp;Lacker&nbsp;、旧金山联储主席John&nbsp;Williams和明尼阿波利斯联储主席Narayana&nbsp;Kocherlakota也将分别登场。</p>

                    <p>对于市场而言，在美联储主席传递出年内加息的基调之后，上述关于对于美国经济数据的看法以及加息借点的观点或提供更多美联储内部的风向指引。</p>

                    <p><a href="http://img.cdn.wallstreetcn.com/thumb/uploads/fd/0e/68/3.jpg"><img alt="3" src="http://img.cdn.wallstreetcn.com/thumb/uploads/fd/0e/68/3,w_640.jpg"></a></p>

                    <p><strong>“创新派”加拿大央行是否又有新行动？</strong></p>

                    <p>周三晚间22:00将公布加拿大央行5月最新利率决议。尽管加拿大央行在4月份的决议中维持利率不变，并且本次出现利率变化的可能性交代，但是上月上调通胀预期还是令市场稍感意外。</p>

                    <p>在通胀控制上，加拿大央行已经开始审视，2%的通胀目标是否是最佳的选择。货币政策如何在金融危机前做出警示，在下一波危机到来之后如何将利率压低至接近于零水平将成为新的议题。</p>

                    <p>加拿大央行立场逐渐转向鹰派的举动，或支撑加元大幅走高。投资者密切关注加拿大央行在本次决议中的声明对于经济和货币政策立场的最新描述。</p>

                    <p><strong>BONUS：“肥皂剧”希腊难言结局</strong></p>

                    <p>德法两大欧元区经济体的领导人近期共同表态向希腊施压。默克尔与奥朗德敦促希腊加快谈判进程，本月末以前达成救助方案的协议，化解希腊融资的僵局。然而希腊总理齐普拉斯却认为，希腊社会已经无法承受更多的紧缩措施，债权人必须做出让步，以打破目前的僵局并缓解希腊的现金压力。</p>

                    <p>对于需要“砸锅卖铁”的希腊而言，加快推行国有资产私有化，机场、公路等基础设施和公用事业都已经成为“甩卖”对象。然而即便如此，能否在月末之前取得进展依然无人能知。</p>

                    <p>若不能达成协议，希腊将很快走向危机。雅典将被迫使用IMF的准备金账户，以偿还IMF的最后一笔款项。6月初，另有两倍于该笔款项的金额即将到期。此外，本月末，希腊还需支付养老金和工资。</p>

                    <p>欧元集团主席迪塞尔布洛姆强调，总额超过72亿欧元的救助贷款只有在与希腊政府就改革措施达成广泛协议之后，才有可能“解冻”。</p>
                    <p>（更多精彩财经资讯，<a href="http://activity.wallstreetcn.com/app/index.html">点击这里下载华尔街见闻App</a>)</p>
                </div>
            </article>
        </div>
    </div>
@endsection
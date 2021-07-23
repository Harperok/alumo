<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<style>
@media all and (min-width: 900px) {

.content li{
	padding: 5%;
}

.content h3{
	font-family: 'Roboto', sans-serif;
	line-height: 150%;
	letter-spacing: 0.02em;
}

.content p{
	font-family: 'Roboto', sans-serif;
	line-height: 150%;
	letter-spacing: 0.02em;
	font-size: 14px;
	margin: 15px 0 15px;

}

.content ul{
	font-family: 'Roboto', sans-serif;
	line-height: 150%;
	letter-spacing: 0.02em;
	list-style-type: square;
}
.headAdvant{
	font-family: 'Roboto', sans-serif;
	text-decoration-line: underline;
	margin-left: 1%;
}

#tabs {
	float: left;
	width: 50%;
}


.imgTech{
	float: left;
	width: 42%;
	padding: 4%;
}

.techImage{
	width: 90%;
	height: auto;
	margin: 10%;
}

#tabs:after {
    content: '';
    display: table;
    clear: both;
}
#tabs input[type=radio] {
    display:none;
}

#tabs label {
    float: left;
    width: 33%;
    text-decoration: none;
    text-align: center;
    cursor: pointer;
	border: 1px solid rgba(0, 0, 0, 0.3)
}
#tabs label span {
    display: none;
}

.advant{
	float: left;
	width: 43%;
	margin-block-start: 0;
	font-size: 12px;
	margin-block-end: 0;
	padding-inline-start: 5%;
}
.tab-content {
    display: none;
    width: 100%;
    float: left;
    padding: 15px;
    box-sizing: border-box;
}

.tab-content p{
    padding: 1%;
}

#tabs [id^="tab"]:checked + label {
    background: #000;
    color: #fff 
}

#tabs [id^="tab"]:disabled + label {
    background: #fff;
    color: #000 
}



#tab-first:checked ~ #tab-content-1,
#tab-second:checked ~ #tab-content-2,
#tab-third:checked ~ #tab-content-3
{
    display: block;
	background: #000;
	color: #fff;
}
}
</style>

<h1 class="headAdvant">Технология панелей Alumoar</h1>
<div class="content">	
	<div id="tabs">
		<input type="radio" name="tabs" id="tab-first" checked >
		<label for="tab-first">
			<p class='tab_head'>Технология</p>
		</label>
		<input type="radio" name="tabs" id="tab-second">
		<label for="tab-second">
			<p class='tab_head'>Памятка по эксплуатации</p>
		</label>
		<input type="radio" name="tabs" id="tab-third">
		<label for="tab-third">
			<p class='tab_head'>Монтаж</p>
		</label>
			<div id="tab-content-1" class="tab-content">
				<p style="color: #fff;">
				<b>Интерьерные панели AlumoArt</b> – инновационный листовой материал крупного формата,
				который представляет собой композитную плиту с нанесенным на нее декоративным
				слоем и защитным покрытием.
				</p>
				<h3>Преимущества панелей Alumoart</h3>
				<ul class="advant">
					<li><b>Многообразие дизайнов:</b> большое количество
							коллекций в разных тематиках для разных интерьерных решений</li>
					<li><b>Простой уход:</b> панели невосприимчивы к загрязнению, легко очищаются, достаточно проводить
							легкую влажную уборку 3-4 раза в год;</li>
					<li><b>Влагостойкость</b> – отсутствие разбухания при прямом контакте с водой.
							Можно применять во влажных помещениях, ванных, душевых комнатах;</li>
				</ul>
				<ul class="advant">
					<li><b>Защита от выцветания и выгорания рисунка</b> даже
						под прямыми солнечными лучами;</li>
					<li><b>Антиграффити</b> – стойкость к перманентным маркерам, фломастерам, краскам, гуаши;</li>
					<li><b>Срок эксплуатации более 25 лет;</b></li>
				</ul>
			</div> 
		<div id="tab-content-2" class="tab-content">
		<p style="color: #fff;">Второй таб. Lorem, ipsum dolor sit amet consectetur adipisicing elit.
			Est quia sunt earum aliquid modi itaque ad similique quasi,
			fuga maiores debitis esse cum, sequi, voluptatem natus saepe sint fugit perferendis!</p>
		</div>
		<div id="tab-content-3" class="tab-content">
			<p style="color: #fff;">Третий таб. Lorem, ipsum dolor sit amet consectetur adipisicing elit.
			Est quia sunt earum aliquid modi itaque ad similique quasi,
			fuga maiores debitis esse cum, sequi, voluptatem natus saepe sint fugit perferendis!</p>
	</div>
	</div>
	<div class="imgTech">
		<img class="techImage" src="/local/templates/art/components/alumo/content/tecnology/image15.jpg">
	</div>
</div>
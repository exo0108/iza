<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Goods;
use Carbon\Carbon;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Goods = Goods::create([
            'name' => '汪喵星球 濕式衛生紙 可沖馬桶 46抽/包 寵物溼紙巾 12包特價$750 毛孩專用濕巾',
            'type' => '耳朵清潔',
            'price' => 120,
            'img' => 'img\shop_content\shop1.jpg',
            'describe' => '1.本網站僅提供台灣本島寄送服務(不接受郵政信箱地址)，指定商品採新竹物流配送，(暫無提供離島/店到店服務/郵局寄送) ，確認付款完成我們會於1~3個工作日內將商品寄到您的收貨地址<br>
                            #黑貓宅急便固定周日不配送<br>
                            #無夜間6點後配送服務<br>
                            #新竹物流配送物品暫無提供貨到付款服務<br>

                            2.飼料出貨皆有保證四個月以上保存期限，如期限太短會主動提前告知客人，與您確認是否有需要訂購，如飼料因期限問題，需退換貨需自行負擔運費。<br>
                            (即期品會在標題標示效期以及優惠購買金額，不在保證四個月效期的範疇內)<br>

                            3.貨到付款除需收取運費外 ，每筆加收60元貨到付款手續費<br>

                            4.本系統保留取消訂單權利',       
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $Goods = Goods::create([
            'name' => 'Petz Route 沛滋露 水果村系列橡膠順毛梳 寵物皮膚/寵物梳',
            'type' => '電剪/針梳/指甲剪',
            'price' => 419,
            'img' => 'img\shop_content\shop3.jpg',
            'describe' => '★「簡單使用且輕刷的梳子」的概念<br>
                            ★採用加了備長炭的髮針傾斜15℃的方式<br>
                            ★前端為軟圓頭，不會傷害皮膚<br>
                            ★適合長毛品種。抗菌、防止靜電劑<br>
                            適用寵物：犬貓通用<br>
                            產地：日本<br><br>
                            
                            ◆商品規格◆<br>
                            重量 9.1x18.5x37公分/個<br><br>
                            
                            寵物每天梳毛的好處:<br>                            
                            1.在為貓狗梳理的過程中,針梳反覆磨擦皮膚,能夠促進愛寵的血液循環,增加皮屬抵抗力,消除愛寵身體疲勞,<br>
                            2.減低掉毛量,會梳理掉脫落的死毛,防止毛髪打結·<br>
                            3.保證愛寵更好的毛質、毛量,讓愛寵被毛順滑有光澤,<br>
                            4.在梳毛的過程中,如發現貓狗身上有外傷皮膚問題,請及時就醫。',      
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'type' => '電剪/針梳/指甲剪',
            'name' => 'Petz Route 沛滋露 水果村系列備長炭順毛梳 寵物皮膚/寵物梳',
            'price' => 419,
            'img' => 'img\shop_content\shop4.webp',
            'describe' => '★「簡單使用且輕刷的梳子」的概念<br>
                            ★採用加了備長炭的髮針傾斜15℃的方式<br>
                            ★前端為軟圓頭，不會傷害皮膚<br>
                            ★適合長毛品種。抗菌、防止靜電劑<br>
                            適用寵物：犬貓通用<br>
                            產地：日本<br><br>
                            
                            ◆商品規格◆<br>
                            重量 9.1x18.5x37公分/個<br><br>                            
                            
                            寵物每天梳毛的好處:<br>                            
                            1.在為貓狗梳理的過程中,針梳反覆磨擦皮膚,能夠促進愛寵的血液循環,增加皮屬抵抗力,消除愛寵身體疲勞,<br>
                            2.減低掉毛量,會梳理掉脫落的死毛,防止毛髪打結·<br>
                            3.保證愛寵更好的毛質、毛量,讓愛寵被毛順滑有光澤,<br>
                            4.在梳毛的過程中,如發現貓狗身上有外傷皮膚問題,請及時就醫。',              
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'type' => '毛髮清潔/護膚保養',
            'name' => '西莎絨情蜜意寵物犬貓用吸水超細纖維毛巾 米色/藍色 130*80cm',
            'price' => 250,
            'img' => 'img\shop_content\shop5.png',
            'describe' => '1.雙面超細纖維毛料，觸感柔軟舒服。<br>
                            2.採用吸濕排汗技術，可瞬間吸水、快速乾燥。<br>
                            *使用前請先以溫水及中性洗衣精洗滌，增加吸水度與柔軟度。<br>
                            *為避免破壞纖維組織，請勿使用漂白水或柔軟精清洗。',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop6.png',
            'type' => '毛髮清潔/護膚保養',
            'name' => '日本TAURUS 金牛座 愛貓用 EM微生物潔毛噴霧 250ml',
            'price' => 315,
            'describe' => '●特色：活性有益微生物群可長時間抑制寵物皮毛裡的壞菌，產品不添加化學成分，適合皮膚敏感的寵物使用<br>
                            ●成分：光合作用菌種、乳酸菌、酵母菌、線狀菌、放線菌等菌類<br>
                            ●使用方式：每日1~2次請以微濕潤的程度噴在皮膚毛髮上，並給予適度的搓揉。受傷比較嚴重的地方請等噴霧乾燥後再噴一次並再給予適度的搓揉<br>',              
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop7.png',
            'type' => '毛髮清潔/護膚保養',
            'name' => '355ml Dechra 德瑪沛燕麥洗毛精',
            'price' => 500,
            'describe' => '原廠：Dechra<br>
                            成分：solubilized oatmeal, safflower oil, ceramides<br>
                            產品特色：<br>
                            1.添加水溶性燕麥及紅花油等天然成分，不含香精及人工止癢成份，溫和不刺激肌膚。<br>
                            2.添加高級保濕成分賽洛美，增加毛髮洗浴後的柔順，不再乾澀。<br>
                            注意事項：須經專業獸醫師指示使用。<br>',                     
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop8.png',
            'type' => '毛髮清潔/護膚保養',
            'name' => "K'9 NatureHolic天然無毒洗劑 蠟菊護色寵物洗毛精 476ml",
            'price' => 550,
            'describe' => '［還原護色／滋潤豐盈］<br>
                            1.蠟菊萃取及維生素E的高效抗氧化能力，能保護膠原蛋白和脂質體，幫助鎖住毛色，還原寶貝毛色健康<br>
                            2. Ecocert認證保濕因子及維生素B5，滋養毛髮長效保濕，豐盈不糾結<br>
                            3.天然植物脂質，可於毛髮外部產生自然保護膜，增加毛髮強度，防止毛色乾燥斷裂<br><br>

                            主要成分：<br>
                            蠟菊、洋甘菊、西印度櫻桃（萃取液）丶維生素E、維生素B5丶山梨酸鉀丶月桂醇乳酸酯丶玻尿酸丶椰油基甜菜鹼丶玉米保濕因子丶葡萄糖胺起泡劑<br>
                            使用方法：<br>
                            取適量洗毛精於沾濕的毛髮上，輕輕搓揉出細緻泡沫，待洗淨毛髮後，再以清水沖洗乾淨即可<br>
                            用途：寵物毛髮洗淨及滋潤',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop9.png',
            'type' => '毛髮清潔/護膚保養',
            'name' => '美國TropiClean 巧倍麗潔耳布-50抽',
            'price' => 420,
            'describe' => '1.直接擦拭使用方便,溫和無酒精<br>
                            2.獨特的潔耳配方,達到最好的清潔效果!<br>
                            使用方式<br>
                            將潔耳布直接在犬隻的耳朵內髒污處輕柔擦拭即可<br>
                            必要時可重複使用，直到耳道充分清潔為止<br>
                            建議每週使用一次,以保持耳道清潔,減少耳朵感染和發炎的風險．<br><br>
                            
                            包裝說明<br>
                            尺寸:約15 cm X 19.2 cm<br>
                            成分<br>
                            純水,甘油,水楊酸,丙二醇,蘋果酸,聚山梨醇酯 20,金縷梅精華,苯甲酸,蘆薈精華<br>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop10.png',
            'type' => '毛髮清潔/護膚保養',
            'name' => '美國Tropiclean 水精靈/巧倍麗 潔面慕斯 狗用乾洗澡(不流淚配方) 7.4oz(220ml)',
            'price' => 370,
            'describe' => '產品特色:<br>
                            水精靈潔面慕斯,能有效的去除寵物臉部的汙垢,同時添加藍莓,燕麥精華與椰子清潔液,帶走惱人的髒污與異味!定期使用本產品來保持寵物臉部的乾爽清潔,讓你更想親近它!<br>
                            使用說明:<br>
                            將泡沫直接塗抹在寵物的臉部髒污或皺褶的地方,並加以按摩搓揉,再用紙巾擦拭乾淨即可!<br>
                            請避免直接塗抹在寵物的眼睛,本產品亦可使用於脖子,外耳!<br>
                            主要成分:<br>
                            純水,溫和清潔液,有機(藍莓精華,小黃瓜精華,白茶精華,燕麥精華)<br>',            
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop11.webp',
            'type' => '口腔清潔',
            'name' => '法國維克C.E.T 酵素免洗牙膏 強效型寵物牙膏70g 牛肉口味',
            'price' => 270,
            'describe' => '法國維克C.E.T<br>
                            酵素免洗牙膏-強效型 兩種口味 70g<br>
                            商品特色：<br>
                            「維克C.E.T.酵素牙膏」 是特別針對狗貓所設計的配方<br>
                            含有專利的C.E.T.雙酵素系統<br>
                            嗜口性佳，不需漱口<br><br>
                            
                            品牌:法國維克C.E.T<br>                            
                            商品:酵素免洗牙膏-強效型<br>                            
                            規格:70g<br><br>

                            請於下標前利用問與答來詢問顏色/現貨/尺寸狀況^^<br>                            
                            超過5公斤需以宅配收件<br><br>
                            
                            ◆備註說明：本商品一經拆封使用，恕無法辦理退貨，敬請見諒！退貨的商品必須為全新狀態且完整包裝(需自付運費）。<br><br>
                            
                            #維克<br>
                            #寵物牙膏<br>
                            #免洗牙膏<br>
                            #酵素牙膏<br>
                            #狗用牙膏<br>
                            #貓用牙膏',    
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop12.webp',
            'type' => '口腔清潔',
            'name' => '【BONE BONE】 金牛座 日本TAURUS 愛貓專用牙膏/21g',
            'price' => 230,
            'describe' => '使用溫和研磨劑，可快速清除齒垢，預防蛀牙。<br>
                        定期使用本產品可以幫助去除牙菌斑，降低牙結石及牙垢的產生，並改善愛貓口腔衛生，幫助口氣清新。<br>
                        本產品添加貓咪喜愛的柴魚風味，只需花費短暫時間便可清除齒垢。內含牛磺酸配方！<br><br>

                        【成份】<br>
                        山梨醇,甘油,矽膠,水,磷酸二鈣,纖維膠,牛磺酸 等成分。<br><br>
                        
                        【使用方法】<br>
                        請取適量在紙套牙布或是牙刷上，輕輕對牙齒及牙齦進行刷牙的動作，刷牙後不需要漱口。<br>
                        為保護牙齒健康，建議請保持每日或每２日刷一次牙。<br><br>

                        品牌:日本TAURUS 金牛座<br>
                        商品:金牛座 日本TAURUS  愛貓專用牙膏/21g<br>
                        適合:貓<br>
                        產地:日本<br><br>

                        請於下標前利用問與答來詢問顏色/現貨/尺寸狀況^^<br>
                        超過5公斤需以宅配收件<br>
                        ◆備註說明：本商品一經拆封使用，恕無法辦理退貨，敬請見諒！退貨的商品必須為全新狀態且完整包裝(需自付運費）。',       
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop13.webp',
            'type' => '口腔清潔',
            'name' => '樂健飛 L.C.F 超級褐藻潔牙粉 毛小孩專用/狗用 20g',
            'price' => 430,
            'describe' => '毛小孩居家保健，幫助消除口腔異味，清除齒垢，維護牙齦健康，不含人工色素、防腐劑。<br>
                            四大特色：<br>
                            清除口腔異味<br>
                            維護口腔健康<br>
                            幫助維持清新口氣<br>
                            幫助清除齒垢<br><br>
                            
                            主要成分：<br>
                            挪威褐藻粉、專利柿子萃取物、專利乳酸菌、綠藻精、黃豆粉。<br><br>
                            
                            產品規格：<br>
                            嚴選褐藻粉含天然的碘0.08%、粗蛋白5-8%、粗脂肪2-4%、礦物質15-27%<br><br>
                            
                            餵食方式：<br>
                            (每匙0.2g)<br>
                            10公斤以下每日1-2匙<br>
                            10-25公斤每日2-4匙<br>
                            25公斤每日4-6匙<br>
                            直接添加在食物中混合餵食。<br><br>
                            
                            注意事項：<br>
                            患有甲狀腺機能亢進的犬種請勿食用。<br><br>
                            
                            保存方式：<br>
                            請存放於乾燥陰涼處。<br>
                            為維持保健，請按時按量使用。<br>
                            若有特殊疾病，使用前請先諮詢獸醫。',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop14.webp',
            'type' => '口腔清潔',
            'name' => '金牛座齒垢清光光旋轉牙刷(小型犬用)-山切行單輪',
            'price' => 280,
            'describe' => '專為愛犬開發之旋轉牙刷只需滾動牙刷便可去除齒垢,山切型設計,深入齒縫輕鬆加倍。<br>
                            無需藉由前後磨擦清齒垢,不易出血。<br>
                            本產品還附有貼心的折疊設計,方便收納。<br><br>
                            成分:尼龍、飽和聚酯樹脂<br>
                            規格:0.07mm極細毛約有13200本<br>
                            產地:日本',  
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop15.webp',
            'type' => '口腔清潔',
            'name' => '樂健飛 L.C.F 超級褐藻潔牙粉 毛小孩專用/貓用 40g',
            'price' => 630,
            'describe' => '毛小孩居家保健，幫助消除口腔異味，清除齒垢，維護牙齦健康，不含人工色素、防腐劑。<br><br>
                            四大特色：<br>
                            清除口腔異味<br>
                            維護口腔健康<br>
                            幫助維持清新口氣<br>
                            幫助清除齒垢<br><br>
                            
                            主要成分：<br>
                            挪威褐藻粉、專利柿子萃取物、專利乳酸菌、啤酒酵母、綠藻精、黃豆粉。<br><br>
                            
                            產品規格：<br>
                            嚴選褐藻粉含天然的碘0.08%、粗蛋白5-8%、粗脂肪2-4%、礦物質15-27%<br><br>
                            
                            餵食方式：<br>
                            (每匙0.2g)<br>
                            10公斤以下每日1-2匙<br>
                            10-25公斤每日2-4匙<br>
                            25公斤每日4-6匙<br>
                            直接添加在食物中混合餵食。<br><br>
                            
                            注意事項：<br>
                            患有甲狀腺機能亢進的貓種請勿食用。<br><br>
                            
                            保存方式：<br>
                            請存放於乾燥陰涼處。<br>
                            為維持保健，請按時按量使用。<br>
                            若有特殊疾病，使用前請先諮詢獸醫。',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop16.webp',
            'type' => '口腔清潔',
            'name' => '日本製 五指型刷牙手套 1枚入 刷牙手套/牙刷套',
            'price' => 199,
            'describe' => '● 像玩耍一樣的清潔牙齒，五指型設計降低滑落風險，避免誤食情況發生<br>
                            ● 指尖清潔更靈活，不怕牙刷東戳西戳容易痛痛<br>
                            ● 清洗後可再次使用，環保又實惠<br>
                            ● 特殊編織手法，讓潔牙手套確實貼附於牙齒的凹凸面及齒縫，清潔力upup！<br><br>
                            
                            保養方式<br>
                            1. 使用後用清水或30度內溫水清洗乾淨，若髒污明顯，請放入洗衣袋中，洗滌後陰乾<br>
                            2. 建議使用次數為30回，若髒汙以非常明顯，請更換新的手套<br><br>
                            
                            注意事項<br>
                            1. 本產品為寵物專用潔牙套，請勿做其他用途<br>
                            2. 請由寵物較親近的人使用，避免咬傷手指<br>
                            3. 若寵物隊節牙手套反感，可先從碰觸嘴巴周圍開始，循序漸進<br>
                            4. 洗滌時務必放入洗衣袋，請勿使用烘乾機、熨斗及漂白水',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop17.png',
            'type' => '耳朵清潔',
            'name' => '美國TropiClean 巧倍麗神奇柔膚巾(深層潔淨)(敏感膚質) -100抽',
            'price' => 499,
            'describe' => '特色<br>
                                1.巧倍麗深層潔淨專用柔膚巾,含豐富的保濕柔順成分<br>
                                2.溫和無酒精,也可使用在眼睛及嘴巴周圍<br>
                                3.獨特的椰子油清潔劑,能有效去除髒污,口水漬,花粉或其它不明的汙漬<br>
                                4.消除惱人的異味,直接擦拭使用方便<br>
                                5.即使身上有使用驅蚤產品也可使用<br>
                                使用方式<br>
                                將柔膚巾直接在有髒污的地方擦拭!可每天使用<br>
                                主要成分<br>
                                純水,甘油,椰子油清潔劑,蘆薈精華,丙二醇,苯甲酸,金縷梅<br>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop18.png',
            'type' => '耳朵清潔',
            'name' => "日本Pet Paradise授權正品 [Pet'y Soin] 絲蛋白愛犬用濕紙巾【小型犬用】 25枚入",
            'price' => 120,
            'describe' => '特色<br>
                            1.擦拭氣味、光潔寵物的表面。<br>
                            2.含有絲蛋白成分、能光澤水潤毛髮！<br>
                            3.天然消臭抗菌成分<br>
                            4.擦拭寵物窩的灰塵、花粉對策<br>
                            5.使用方便、柔軟厚實<br>
                            6.輕柔溫和的玫瑰香味<br>
                            規格<br>
                            包裝：約16×25cm<br>
                            紙巾：約20×30cm<br>
                            内容量:25枚入り<br>
                            成分:精製水、絲蛋白プロテイン滑沢剤、ポリクオタニウム-51（リピジュア®）、香料、他3成分<br>
                            素材:人造纖維不織布<br>
                            請勿使用在其他用途。<br>
                            在小型狗和人的皮膚有傷口、異常如皮炎，請勿使用，因為它可能造成惡化。<br>
                            使用本品若有異常請停止使用，接受醫生或獸醫的治療。',            
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop19.png',
            'type' => '耳朵清潔',
            'name' => "日本Pet Paradise授權正品 [Pet'y Soin] 絲蛋白每日清潔紙巾【中大型犬用】15枚入",
            'price' => 150,
            'describe' => '特色<br>
                            1.擦拭氣味、光潔寵物的表面。<br>
                            2.含有絲蛋白成分、能光澤水潤毛髮！<br>
                            3.天然消臭抗菌成分<br>
                            4.擦拭寵物窩的灰塵、花粉對策<br>
                            5.使用方便、柔軟厚實<br>
                            6.輕柔溫和的玫瑰香味<br>
                            規格<br>
                            包裝：約16×25cm<br>
                            紙巾：約20×30cm<br>
                            内容量:25枚入り<br>
                            成分:精製水、絲蛋白プロテイン滑沢剤、ポリクオタニウム-51（リピジュア®）、香料、他3成分<br>
                            素材:人造纖維不織布<br>
                            請勿使用在其他用途。<br>
                            在小型狗和人的皮膚有傷口、異常如皮炎，請勿使用，因為它可能造成惡化。<br>
                            使用本品若有異常請停止使用，接受醫生或獸醫的治療。',            
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop20.png',
            'type' => '耳朵清潔',
            'name' => 'yu有機蘆薈保養潔耳液 175ml',
            'price' => 370,
            'describe' => '◆ 採用純淨100%薰衣草花露能溫和有效清潔寵物耳中的耳蠟髒污<br>
                            ◆ 蘆薈富含高分子多醣體，能鎮靜肌膚<br>
                            ◆ 有機柳蘭、天竺葵精華油平衡油脂分泌<br>
                            ◆ 不含清潔劑、不含酒精、不含香精<br>
                            ◆ 適用於：犬、貓<br>
                            ◆ 全球唯一寵物保養榮獲世界年度品牌獎',            
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop21.png',
            'type' => '耳朵清潔',
            'name' => '118ml Dechra德瑪沛 醋酸清耳液',
            'price' => 450,
            'describe' => '原廠：Dechra<br>
                            成分：2% acetic acid、2% boric acid<br>
                            產品特色：<br>
                            1.清潔、收斂角質細胞、解油膩→去除耳垢<br>
                            2.酸化耳道→提供不利微生物生長的環境<br>
                            3.加入甘油、可避免耳道過於乾燥<br>
                            注意事項：須經專業獸醫師指示使用。',            
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        $Goods = Goods::create([
            'img' => 'img\shop_content\shop22.png',
            'type' => '耳朵清潔',
            'name' => '118ml Dechra德瑪沛 翠絲清耳液',
            'price' => 450,
            'describe' => '原廠：Dechra<br>
                                成分：TrizEDTA〈tromethamine USP、disodium EDTA dihydrate〉<br>
                                產品特色： <br>
                                1.能螯合細菌細胞膜上的金屬離子<br>
                                2.鹼性配方：能製造讓抗生素發揮最佳效果的環境<br>
                                注意事項：須經專業獸醫師指示使用',            
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $Goods = Goods::create([
            'img' => 'img\shop_content\shop23.png',
            'type' => '除臭液/除臭劑/清潔劑/香水',
            'name' => '汪喵星球 寵物環境除臭消臭抗菌噴霧 300ML',
            'price' => 320,
            'describe' => '真正安全，有感消臭<br>
                                            無酒精、無香精、無刺激性<br>
                                            植萃成分 + 天然酵素，快速包覆分解臭源<br>
                                            如何使用<br>
                                            先擦去犬貓的便便或尿尿，轉開卡榫<br>
                                            均匀噴灑，距離異味物體約 15~20cm，於通風處使用可加速噴霧揮發，效果更佳',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}

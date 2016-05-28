<?php

class Region
{
    private static $region = array (
		'province_revert' => array(),
		'city_revert' => array(),
        'province' => array(
            110000 => '北京',
            120000 => '天津',
            130000 => '河北',
            140000 => '山西',
            150000 => '内蒙古',
            210000 => '辽宁',
            220000 => '吉林',
            230000 => '黑龙江',
            310000 => '上海',
            320000 => '江苏',
            330000 => '浙江',
            340000 => '安徽',
            350000 => '福建',
            360000 => '江西',
            370000 => '山东',
            410000 => '河南',
            420000 => '湖北',
            430000 => '湖南',
            440000 => '广东',
            450000 => '广西',
            460000 => '海南',
            500000 => '重庆',
            510000 => '四川',
            520000 => '贵州',
            530000 => '云南',
            540000 => '西藏',
            610000 => '陕西',
            620000 => '甘肃',
            630000 => '青海',
            640000 => '宁夏',
            650000 => '新疆',
            710000 => '台湾',
            810000 => '香港',
            820000 => '澳门',
        ),
        'city' => array(
            110000 => '北京',
            120000 => '天津',
            130100 => '石家庄',
            130181 => '辛集',
            130183 => '晋州',
            130184 => '新乐',
            130200 => '唐山',
            130281 => '遵化',
            130283 => '迁安',
            130300 => '秦皇岛',
            130400 => '邯郸',
            130481 => '武安',
            130500 => '邢台',
            130581 => '南宫',
            130582 => '沙河',
            130600 => '保定',
            130681 => '涿州',
            130682 => '定州',
            130683 => '安国',
            130684 => '高碑店',
            130700 => '张家口',
            130800 => '承德',
            130900 => '沧州',
            130981 => '泊头',
            130982 => '任丘',
            130983 => '黄骅',
            130984 => '河间',
            131000 => '廊坊',
            131081 => '霸州',
            131082 => '三河',
            131100 => '衡水',
            131181 => '冀州',
            131182 => '深州',
            140100 => '太原',
            140181 => '古交',
            140200 => '大同',
            140300 => '阳泉',
            140400 => '长治',
            140481 => '潞城',
            140500 => '晋城',
            140581 => '高平',
            140600 => '朔州',
            140700 => '晋中',
            140781 => '介休',
            140800 => '运城',
            140881 => '永济',
            140882 => '河津',
            140900 => '忻州',
            140981 => '原平',
            141000 => '临汾',
            141081 => '侯马',
            141082 => '霍州',
            141100 => '吕梁',
            141181 => '孝义',
            141182 => '汾阳',
            150100 => '呼和浩特',
            150121 => '土默特左旗',
            150200 => '包头',
            150221 => '土默特右旗',
            150223 => '达尔罕茂明安联合旗',
            150300 => '乌海',
            150400 => '赤峰',
            150421 => '阿鲁科尔沁旗',
            150422 => '巴林左旗',
            150423 => '巴林右旗',
            150425 => '克什克腾旗',
            150426 => '翁牛特旗',
            150428 => '喀喇沁旗',
            150430 => '敖汉旗',
            150500 => '通辽',
            150521 => '科尔沁左翼中旗',
            150522 => '科尔沁左翼后旗',
            150524 => '库伦旗',
            150525 => '奈曼旗',
            150526 => '扎鲁特旗',
            150581 => '霍林郭勒',
            150600 => '鄂尔多斯',
            150621 => '达拉特旗',
            150622 => '准格尔旗',
            150623 => '鄂托克前旗',
            150624 => '鄂托克旗',
            150625 => '杭锦旗',
            150626 => '乌审旗',
            150627 => '伊金霍洛旗',
            150700 => '呼伦贝尔',
            150721 => '阿荣旗',
            150722 => '莫力达瓦达斡尔族自治旗',
            150723 => '鄂伦春自治旗',
            150724 => '鄂温克族自治旗',
            150725 => '陈巴尔虎旗',
            150726 => '新巴尔虎左旗',
            150727 => '新巴尔虎右旗',
            150781 => '满洲里',
            150782 => '牙克石',
            150783 => '扎兰屯',
            150784 => '额尔古纳',
            150785 => '根河',
            150800 => '巴彦淖尔',
            150823 => '乌拉特前旗',
            150824 => '乌拉特中旗',
            150825 => '乌拉特后旗',
            150826 => '杭锦后旗',
            150900 => '乌兰察布',
            150926 => '察哈尔右翼前旗',
            150927 => '察哈尔右翼中旗',
            150928 => '察哈尔右翼后旗',
            150929 => '四子王旗',
            150981 => '丰镇',
            152200 => '兴安盟',
            152201 => '乌兰浩特',
            152202 => '阿尔山',
            152221 => '科尔沁右翼前旗',
            152222 => '科尔沁右翼中旗',
            152223 => '扎赉特旗',
            152500 => '锡林郭勒盟',
            152501 => '二连浩特',
            152502 => '锡林浩特',
            152522 => '阿巴嘎旗',
            152523 => '苏尼特左旗',
            152524 => '苏尼特右旗',
            152525 => '东乌珠穆沁旗',
            152526 => '西乌珠穆沁旗',
            152527 => '太仆寺旗',
            152528 => '镶黄旗',
            152529 => '正镶白旗',
            152530 => '正蓝旗',
            152900 => '阿拉善盟',
            152921 => '阿拉善左旗',
            152922 => '阿拉善右旗',
            152923 => '额济纳旗',
            210100 => '沈阳',
            210181 => '新民',
            210200 => '大连',
            210281 => '瓦房店',
            210282 => '普兰店',
            210283 => '庄河',
            210300 => '鞍山',
            210381 => '海城',
            210400 => '抚顺',
            210500 => '本溪',
            210600 => '丹东',
            210681 => '东港',
            210682 => '凤城',
            210700 => '锦州',
            210781 => '凌海',
            210782 => '北镇',
            210800 => '营口',
            210881 => '盖州',
            210882 => '大石桥',
            210900 => '阜新',
            211000 => '辽阳',
            211081 => '灯塔',
            211100 => '盘锦',
            211200 => '铁岭',
            211281 => '调兵山',
            211282 => '开原',
            211300 => '朝阳',
            211381 => '北票',
            211382 => '凌源',
            211400 => '葫芦岛',
            211481 => '兴城',
            220100 => '长春',
            220182 => '榆树',
            220183 => '德惠',
            220200 => '吉林',
            220281 => '蛟河',
            220282 => '桦甸',
            220283 => '舒兰',
            220284 => '磐石',
            220300 => '四平',
            220381 => '公主岭',
            220382 => '双辽',
            220400 => '辽源',
            220500 => '通化',
            220581 => '梅河口',
            220582 => '集安',
            220600 => '白山',
            220681 => '临江',
            220700 => '松原',
            220781 => '扶余',
            220800 => '白城',
            220881 => '洮南',
            220882 => '大安',
            222400 => '延边朝鲜族自治州',
            222401 => '延吉',
            222402 => '图们',
            222403 => '敦化',
            222404 => '珲春',
            222405 => '龙井',
            222406 => '和龙',
            230100 => '哈尔滨',
            230182 => '双城',
            230183 => '尚志',
            230184 => '五常',
            230200 => '齐齐哈尔',
            230281 => '讷河',
            230300 => '鸡西',
            230381 => '虎林',
            230382 => '密山',
            230400 => '鹤岗',
            230500 => '双鸭山',
            230600 => '大庆',
            230700 => '伊春',
            230781 => '铁力',
            230800 => '佳木斯',
            230881 => '同江',
            230882 => '富锦',
            230900 => '七台河',
            231000 => '牡丹江',
            231081 => '绥芬河',
            231083 => '海林',
            231084 => '宁安',
            231085 => '穆棱',
            231100 => '黑河',
            231181 => '北安',
            231182 => '五大连池',
            231200 => '绥化',
            231281 => '安达',
            231282 => '肇东',
            231283 => '海伦',
            310000 => '上海',
            320100 => '南京',
            320200 => '无锡',
            320281 => '江阴',
            320282 => '宜兴',
            320300 => '徐州',
            320381 => '新沂',
            320382 => '邳州',
            320400 => '常州',
            320481 => '溧阳',
            320482 => '金坛',
            320500 => '苏州',
            320581 => '常熟',
            320582 => '张家港',
            320583 => '昆山',
            320585 => '太仓',
            320600 => '南通',
            320681 => '启东',
            320682 => '如皋',
            320684 => '海门',
            320700 => '连云港',
            320800 => '淮安',
            320900 => '盐城',
            320981 => '东台',
            320982 => '大丰',
            321000 => '扬州',
            321081 => '仪征',
            321084 => '高邮',
            321100 => '镇江',
            321181 => '丹阳',
            321182 => '扬中',
            321183 => '句容',
            321200 => '泰州',
            321281 => '兴化',
            321282 => '靖江',
            321283 => '泰兴',
            321300 => '宿迁',
            330100 => '杭州',
            330182 => '建德',
            330183 => '富阳',
            330185 => '临安',
            330200 => '宁波',
            330281 => '余姚',
            330282 => '慈溪',
            330283 => '奉化',
            330300 => '温州',
            330381 => '瑞安',
            330382 => '乐清',
            330400 => '嘉兴',
            330481 => '海宁',
            330482 => '平湖',
            330483 => '桐乡',
            330500 => '湖州',
            330600 => '绍兴',
            330681 => '诸暨',
            330683 => '嵊州',
            330700 => '金华',
            330781 => '兰溪',
            330782 => '义乌',
            330783 => '东阳',
            330784 => '永康',
            330800 => '衢州',
            330881 => '江山',
            330900 => '舟山',
            331000 => '台州',
            331081 => '温岭',
            331082 => '临海',
            331100 => '丽水',
            331181 => '龙泉',
            340100 => '合肥',
            340181 => '巢湖',
            340200 => '芜湖',
            340300 => '蚌埠',
            340400 => '淮南',
            340500 => '马鞍山',
            340600 => '淮北',
            340700 => '铜陵',
            340800 => '安庆',
            340881 => '桐城',
            341000 => '黄山',
            341100 => '滁州',
            341181 => '天长',
            341182 => '明光',
            341200 => '阜阳',
            341282 => '界首',
            341300 => '宿州',
            341500 => '六安',
            341600 => '亳州',
            341700 => '池州',
            341800 => '宣城',
            341881 => '宁国',
            350100 => '福州',
            350181 => '福清',
            350182 => '长乐',
            350200 => '厦门',
            350300 => '莆田',
            350400 => '三明',
            350481 => '永安',
            350500 => '泉州',
            350581 => '石狮',
            350582 => '晋江',
            350583 => '南安',
            350600 => '漳州',
            350681 => '龙海',
            350700 => '南平',
            350781 => '邵武',
            350782 => '武夷山',
            350783 => '建瓯',
            350784 => '建阳',
            350800 => '龙岩',
            350881 => '漳平',
            350900 => '宁德',
            350981 => '福安',
            350982 => '福鼎',
            360100 => '南昌',
            360200 => '景德镇',
            360281 => '乐平',
            360300 => '萍乡',
            360400 => '九江',
            360481 => '瑞昌',
            360482 => '共青城',
            360500 => '新余',
            360600 => '鹰潭',
            360681 => '贵溪',
            360700 => '赣州',
            360781 => '瑞金',
            360800 => '吉安',
            360881 => '井冈山',
            360900 => '宜春',
            360981 => '丰城',
            360982 => '樟树',
            360983 => '高安',
            361000 => '抚州',
            361100 => '上饶',
            361181 => '德兴',
            370100 => '济南',
            370181 => '章丘',
            370200 => '青岛',
            370281 => '胶州',
            370282 => '即墨',
            370283 => '平度',
            370285 => '莱西',
            370300 => '淄博',
            370400 => '枣庄',
            370481 => '滕州',
            370500 => '东营',
            370600 => '烟台',
            370681 => '龙口',
            370682 => '莱阳',
            370683 => '莱州',
            370684 => '蓬莱',
            370685 => '招远',
            370686 => '栖霞',
            370687 => '海阳',
            370700 => '潍坊',
            370781 => '青州',
            370782 => '诸城',
            370783 => '寿光',
            370784 => '安丘',
            370785 => '高密',
            370786 => '昌邑',
            370800 => '济宁',
            370881 => '曲阜',
            370883 => '邹城',
            370900 => '泰安',
            370982 => '新泰',
            370983 => '肥城',
            371000 => '威海',
            371082 => '荣成',
            371083 => '乳山',
            371100 => '日照',
            371200 => '莱芜',
            371300 => '临沂',
            371400 => '德州',
            371481 => '乐陵',
            371482 => '禹城',
            371500 => '聊城',
            371581 => '临清',
            371600 => '滨州',
            371700 => '菏泽',
            410100 => '郑州',
            410181 => '巩义',
            410182 => '荥阳',
            410183 => '新密',
            410184 => '新郑',
            410185 => '登封',
            410200 => '开封',
            410300 => '洛阳',
            410381 => '偃师',
            410400 => '平顶山',
            410481 => '舞钢',
            410482 => '汝州',
            410500 => '安阳',
            410581 => '林州',
            410600 => '鹤壁',
            410700 => '新乡',
            410781 => '卫辉',
            410800 => '焦作',
            410882 => '沁阳',
            410883 => '孟州',
            410900 => '濮阳',
            411000 => '许昌',
            411081 => '禹州',
            411082 => '长葛',
            411100 => '漯河',
            411200 => '三门峡',
            411281 => '义马',
            411282 => '灵宝',
            411300 => '南阳',
            411381 => '邓州',
            411400 => '商丘',
            411481 => '永城',
            411500 => '信阳',
            411600 => '周口',
            411681 => '项城',
            411700 => '驻马店',
            419001 => '济源',
            420100 => '武汉',
            420200 => '黄石',
            420281 => '大冶',
            420300 => '十堰',
            420381 => '丹江口',
            420500 => '宜昌',
            420581 => '宜都',
            420582 => '当阳',
            420583 => '枝江',
            420600 => '襄阳',
            420682 => '老河口',
            420683 => '枣阳',
            420684 => '宜城',
            420700 => '鄂州',
            420800 => '荆门',
            420881 => '钟祥',
            420900 => '孝感',
            420981 => '应城',
            420982 => '安陆',
            420984 => '汉川',
            421000 => '荆州',
            421081 => '石首',
            421083 => '洪湖',
            421087 => '松滋',
            421100 => '黄冈',
            421181 => '麻城',
            421182 => '武穴',
            421200 => '咸宁',
            421281 => '赤壁',
            421300 => '随州',
            421381 => '广水',
            422800 => '恩施土家族苗族自治州',
            422801 => '恩施',
            422802 => '利川',
            429004 => '仙桃',
            429005 => '潜江',
            429006 => '天门',
            430100 => '长沙',
            430181 => '浏阳',
            430200 => '株洲',
            430281 => '醴陵',
            430300 => '湘潭',
            430381 => '湘乡',
            430382 => '韶山',
            430400 => '衡阳',
            430481 => '耒阳',
            430482 => '常宁',
            430500 => '邵阳',
            430581 => '武冈',
            430600 => '岳阳',
            430681 => '汨罗',
            430682 => '临湘',
            430700 => '常德',
            430781 => '津',
            430800 => '张家界',
            430900 => '益阳',
            430981 => '沅江',
            431000 => '郴州',
            431081 => '资兴',
            431100 => '永州',
            431200 => '怀化',
            431281 => '洪江',
            431300 => '娄底',
            431381 => '冷水江',
            431382 => '涟源',
            433100 => '湘西土家族苗族自治州',
            433101 => '吉首',
            440100 => '广州',
            440200 => '韶关',
            440281 => '乐昌',
            440282 => '南雄',
            440300 => '深圳',
            440400 => '珠海',
            440500 => '汕头',
            440600 => '佛山',
            440700 => '江门',
            440781 => '台山',
            440783 => '开平',
            440784 => '鹤山',
            440785 => '恩平',
            440800 => '湛江',
            440881 => '廉江',
            440882 => '雷州',
            440883 => '吴川',
            440900 => '茂名',
            440981 => '高州',
            440982 => '化州',
            440983 => '信宜',
            441200 => '肇庆',
            441283 => '高要',
            441284 => '四会',
            441300 => '惠州',
            441400 => '梅州',
            441481 => '兴宁',
            441500 => '汕尾',
            441581 => '陆丰',
            441600 => '河源',
            441700 => '阳江',
            441781 => '阳春',
            441800 => '清远',
            441881 => '英德',
            441882 => '连州',
            441900 => '东莞',
            442000 => '中山',
            445100 => '潮州',
            445200 => '揭阳',
            445281 => '普宁',
            445300 => '云浮',
            445381 => '罗定',
            450100 => '南宁',
            450200 => '柳州',
            450300 => '桂林',
            450400 => '梧州',
            450481 => '岑溪',
            450500 => '北海',
            450600 => '防城港',
            450681 => '东兴',
            450700 => '钦州',
            450800 => '贵港',
            450881 => '桂平',
            450900 => '玉林',
            450981 => '北流',
            451000 => '百色',
            451100 => '贺州',
            451200 => '河池',
            451281 => '宜州',
            451300 => '来宾',
            451381 => '合山',
            451400 => '崇左',
            451481 => '凭祥',
            460100 => '海口',
            460200 => '三亚',
            460300 => '三沙',
            469001 => '五指山',
            469002 => '琼海',
            469003 => '儋州',
            469005 => '文昌',
            469006 => '万宁',
            469007 => '东方',
            500000 => '重庆',
            510100 => '成都',
            510181 => '都江堰',
            510182 => '彭州',
            510183 => '邛崃',
            510184 => '崇州',
            510300 => '自贡',
            510400 => '攀枝花',
            510500 => '泸州',
            510600 => '德阳',
            510681 => '广汉',
            510682 => '什邡',
            510683 => '绵竹',
            510700 => '绵阳',
            510781 => '江油',
            510800 => '广元',
            510900 => '遂宁',
            511000 => '内江',
            511100 => '乐山',
            511181 => '峨眉山',
            511300 => '南充',
            511381 => '阆中',
            511400 => '眉山',
            511500 => '宜宾',
            511600 => '广安',
            511681 => '华蓥',
            511700 => '达州',
            511781 => '万源',
            511800 => '雅安',
            511900 => '巴中',
            512000 => '资阳',
            512081 => '简阳',
            513200 => '阿坝藏族羌族自治州',
            513300 => '甘孜藏族自治州',
            513400 => '凉山彝族自治州',
            513401 => '西昌',
            520100 => '贵阳',
            520181 => '清镇',
            520200 => '六盘水',
            520300 => '遵义',
            520381 => '赤水',
            520382 => '仁怀',
            520400 => '安顺',
            520500 => '毕节',
            520600 => '铜仁',
            522300 => '黔西南布依族苗族自治州',
            522301 => '兴义',
            522600 => '黔东南苗族侗族自治州',
            522601 => '凯里',
            522700 => '黔南布依族苗族自治州',
            522701 => '都匀',
            522702 => '福泉',
            530100 => '昆明',
            530181 => '安宁',
            530300 => '曲靖',
            530381 => '宣威',
            530400 => '玉溪',
            530500 => '保山',
            530600 => '昭通',
            530700 => '丽江',
            530800 => '普洱',
            530900 => '临沧',
            532300 => '楚雄彝族自治州',
            532301 => '楚雄',
            532500 => '红河哈尼族彝族自治州',
            532501 => '个旧',
            532502 => '开远',
            532503 => '蒙自',
            532504 => '弥勒',
            532600 => '文山壮族苗族自治州',
            532601 => '文山',
            532800 => '西双版纳傣族自治州',
            532801 => '景洪',
            532900 => '大理白族自治州',
            532901 => '大理',
            533100 => '德宏傣族景颇族自治州',
            533102 => '瑞丽',
            533103 => '芒',
            533300 => '怒江傈僳族自治州',
            533400 => '迪庆藏族自治州',
            540100 => '拉萨',
            540200 => '日喀则',
            610100 => '西安',
            610200 => '铜川',
            610300 => '宝鸡',
            610400 => '咸阳',
            610481 => '兴平',
            610500 => '渭南',
            610581 => '韩城',
            610582 => '华阴',
            610600 => '延安',
            610700 => '汉中',
            610800 => '榆林',
            610900 => '安康',
            611000 => '商洛',
            620100 => '兰州',
            620200 => '嘉峪关',
            620300 => '金昌',
            620400 => '白银',
            620500 => '天水',
            620600 => '武威',
            620700 => '张掖',
            620800 => '平凉',
            620900 => '酒泉',
            620981 => '玉门',
            620982 => '敦煌',
            621000 => '庆阳',
            621100 => '定西',
            621200 => '陇南',
            622900 => '临夏回族自治州',
            622901 => '临夏',
            623000 => '甘南藏族自治州',
            623001 => '合作',
            630100 => '西宁',
            630200 => '海东',
            632200 => '海北藏族自治州',
            632300 => '黄南藏族自治州',
            632500 => '海南藏族自治州',
            632600 => '果洛藏族自治州',
            632700 => '玉树藏族自治州',
            632701 => '玉树',
            632800 => '海西蒙古族藏族自治州',
            632801 => '格尔木',
            632802 => '德令哈',
            640100 => '银川',
            640181 => '灵武',
            640200 => '石嘴山',
            640300 => '吴忠',
            640381 => '青铜峡',
            640400 => '固原',
            640500 => '中卫',
            650100 => '乌鲁木齐',
            650200 => '克拉玛依',
            652101 => '吐鲁番',
            652201 => '哈密',
            652300 => '昌吉回族自治州',
            652301 => '昌吉',
            652302 => '阜康',
            652700 => '博尔塔拉蒙古自治州',
            652701 => '博乐',
            652702 => '阿拉山口',
            652800 => '巴音郭楞蒙古自治州',
            652801 => '库尔勒',
            652901 => '阿克苏',
            653000 => '克孜勒苏柯尔克孜自治州',
            653001 => '阿图什',
            653101 => '喀什',
            653201 => '和田',
            654000 => '伊犁哈萨克自治州',
            654002 => '伊宁',
            654003 => '奎屯',
            654201 => '塔城',
            654202 => '乌苏',
            654301 => '阿勒泰',
            659001 => '石河子',
            659002 => '阿拉尔',
            659003 => '图木舒克',
            659004 => '五家渠',
        ),
    );

    public static function getProvinces()
    {
        return self::$region['province'];
    }

    public static function getCities()
    {
        return self::$region['city'];
    }

	function __construct()
	{
		foreach(self::$region['province'] as $id=>$value)
		{
			self::$region['province_revert'][$value] = $id;
		}

		foreach(self::$region['city'] as $id=>$value)
		{
			self::$region['city_revert'][$value] = $id;
		}
	}

	public static function province2id($name)
	{
		return self::$region['province_revert'][$name];
	}

	public static function city2id($name)
	{
		return self::$region['city_revert'][$name];
	}

	public static function id2city($id)
	{
		return self::$region['city'][$id];
	}


}

?>
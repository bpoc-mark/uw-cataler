// NodeListを配列へ変換
function toArray(nodeList) {
  return Array.prototype.slice.call(nodeList, 0);
}

const container = document.querySelector('#hover_nav_container');
let hoverItemList = document.querySelectorAll('.hover_nav_link');
hoverItemList = toArray(hoverItemList);

let navList = {
  // 企業情報
  0: {
    1: {
      title: 'トップメッセージ',
      href: '/company/top_message/',
    },
    2: {
      title: '理念体系',
      href: '/company/philosophy/',
    },
    3: {
      title: '会社概要',
      href: '/company/company_info/',
    },
    4: {
      title: '事業概要',
      href: '/company/company_business/',
    },
    5: {
      title: '役員',
      href: '/company/officer/',
    },
    6: {
      title: '組織',
      href: '/company/chart/',
    },
    7: {
      title: '拠点',
      href: '/company/location/',
    },
    8: {
      title: '歴史',
      href: '/company/history/',
    },
    9: {
      title: '受賞歴',
      href: '/company/award/',
    },
    10: {
      title: 'キャタラーブランド',
      href: '/company/brand/',
    },
  },
  // 研究開発
  1: {
    1: {
      title: 'キャタラーの技術戦略と<br />事業の方向性',
      href: 'top',
    },
    2: {
      title: '技術人財の育成',
      href: 'top',
    },
    3: {
      title: 'オープンイノベーション',
      href: 'top',
    },
    4: {
      title: '知的財産戦略',
      href: 'top',
    },
  },
  // 製品
  2: {
    //    1: {
    //      title: '触媒とは',
    //      href: '/product/about/'
    //    },
    1: {
      title: 'ガソリン車用触媒',
      href: '/product/gasoline/',
    },
    2: {
      title: 'ディーゼル車用触媒',
      href: '/product/diesel/',
    },
    3: {
      title: '二輪車用触媒',
      href: '/product/motorcycle/',
    },
    4: {
      title: '汎用エンジン用触媒',
      href: '/product/engine/',
    },
    5: {
      title: '電動車両向け電池用炭素材料',
      href: '/product/carbon/',
    },
    6: {
      title: '燃料電池車用電極触媒',
      href: '/product/electro/',
    },
    7: {
      title: '機能性不織布シート',
      href: '/product/sheet/',
    },
    8: {
      title: 'フロー合成',
      href: '/product/flow/',
    },
  },
  // 特徴のある活動
  3: {
    1: {
      title: '事業継続マネジメント<br />(C-BCM)',
      href: '/special/bcm/',
    },
    2: {
      title: '人財育成制度 (C-HAM)',
      href: '/special/ham/',
    },
    3: {
      title: '広報戦略(C-PRS)',
      href: '/special/prs/',
    },
    4: {
      title: '品質の継続的改善<br />(C-QIC)',
      href: '/special/qic/',
    },
    5: {
      title: '小集団改善活動<br />(QC サークル活動)',
      href: '/special/qc/',
    },
    6: {
      title: 'コスト優位性に合わせた<br />整備開発(C-TBP)',
      href: '/special/tbp/',
    },
    7: {
      title: '製品品質を確実に保証する<br />仕組み(C-TOP)',
      href: '/special/top/',
    },
    8: {
      title: 'グローバル生産管理システム<br />(G-CPS)',
      href: '/special/cps/',
    },
    9: {
      title: '工場IoT化(i-Factory)',
      href: '/special/i2022/',
    },
    10: {
      title: '働き方改革活動<br />(C-WIN)',
      href: '/special/win/',
    },
  },
  // サスティナビリティ
  4: {
    1: {
      title: 'CSR管掌メッセージ',
      href: '/sus/message/',
    },
    2: {
      title: 'マテリアリティとSDGs',
      href: '/sus/SDGs/',
    },
    3: {
      title: 'CSR指針',
      href: '/sus/csr/',
    },
    4: {
      title: '環境指針',
      href: '/sus/environment/',
    },
    5: {
      title: '安全指針',
      href: '/sus/safety/',
    },
    6: {
      title: '品質指針',
      href: '/sus/quality/',
    },
    7: {
      title: '調達指針',
      href: '/sus/procurement/',
    },
    8: {
      title: 'CSR体制と取り組み',
      href: '/sus/system/',
    },
    //    8: {
    //      title: 'マテリアリティ(重要課題)',
    //      href: '/sus/materiality/'
    //    },
    9: {
      title: '環境経営',
      href: '/sus/management/',
    },
    10: {
      title: '環境保全',
      href: '/sus/protection/',
    },
    11: {
      title: '労働安全衛生',
      href: '/sus/safety_health/',
    },
    12: {
      title: 'コンプライアンスマネジメント',
      href: '/sus/compliance/',
    },
    13: {
      title: 'リスクマネジメント',
      href: '/sus/risk/',
    },
    14: {
      title: '非財務データ集',
      href: '/sus/data/',
    },
    15: {
      title: 'ISO26000対照表',
      href: '/sus/iso26000/',
    },
  },
};

let urlCategory = ['company', 'technology', 'product', 'special', 'sus'];

let str;
function nowUrl() {
  let now = location.href.split('/');
  str = now[3];
}

function findIndex(arr, str) {
  var index = -1;
  for (var i = 0; i < arr.length; ++i) {
    if (arr[i] == str) {
      index = i;
      break;
    }
  }
  return index;
}
const topPage = document.querySelector('#Top');
console.log(top);
const mql = window.matchMedia('(min-width: 900px)');
const handleMediaQuery = function (mql) {
  if (mql.matches && !topPage) {
    $('.modal_list').remove();
    nowUrl();
    let nowCategoryIndex = findIndex(urlCategory, str);

    let nowIndex;
    if (nowCategoryIndex !== -1) {
      hoverItemList[nowCategoryIndex].classList.add('active');
      nowIndex = nowCategoryIndex;
    } else {
      hoverItemList[0].classList.add('active');
      nowIndex = 0;
    }

    let itemCounter = Object.keys(navList).map(
      (e1) => Object.keys(navList[e1]).length
    );

    let html = '';
    for (let s = 1; s < itemCounter[nowIndex] + 1; s++) {
      let thisItem = navList[nowIndex][s];
      let itemHref = thisItem.href;
      let itemTitle = thisItem.title;
      html += '<li><a href="' + itemHref + '">' + itemTitle + '</a></li>';
    }
    container.innerHTML = html;

    for (let index = 0; index < hoverItemList.length; index++) {
      (function (n) {
        hoverItemList[n].addEventListener('mouseover', function () {
          $(hoverItemList).removeClass('active');
          this.classList.add('active');
          nowIndex = hoverItemList.indexOf(this);
          html = '';
          let itemCounter = Object.keys(navList).map(
            (e1) => Object.keys(navList[e1]).length
          );
          for (let s = 1; s < itemCounter[nowIndex] + 1; s++) {
            thisItem = navList[nowIndex][s];
            itemHref = thisItem.href;
            itemTitle = thisItem.title;
            html += '<li><a href="' + itemHref + '">' + itemTitle + '</a></li>';
          }
          container.innerHTML = html;
        });
      })(index);
    }
  } else {
    for (let i = 0; i < hoverItemList.length; i++) {
      let html = '<ul class="modal_list">';
      let itemCounter = Object.keys(navList).map(
        (e1) => Object.keys(navList[e1]).length
      );
      for (let s = 1; s < itemCounter[i] + 1; s++) {
        let thisItem = navList[i][s];
        let itemHref = thisItem.href;
        let itemTitle = thisItem.title;
        html += '<li><a href="' + itemHref + '">' + itemTitle + '</a></li>';
      }
      html += '</ul>';
      let list = hoverItemList[i].parentNode;
      list = list.parentNode;
      list.insertAdjacentHTML('beforeend', html);
    }

    let modal_item = document.querySelectorAll('.modal_list');
    modal_item = toArray(modal_item);
    for (let j = 0; j < modal_item.length; j++) {
      modal_item[j].style.display = 'none';
    }
  }
};
mql.addListener(handleMediaQuery);
// 再度発火する
handleMediaQuery(mql);

<template>
  <div>
    
    <!-- <v-container id="header">
      <div class="wrapper">
        <v-row >
          <v-col class="text-left">
            <div class="header-logo"></div>
          </v-col>
          <v-col class="text-right">
            <ul class="header-menu clearfix">
              <li>
                <a class="popup-show" data-popup="login">
                  <span>Login to Account</span>
                </a>
              </li>
            </ul>
          </v-col>  
        </v-row>
      </div>
    </v-container> -->

    <v-container id="gameContainer">
      <div class="wrapper">
        <v-row class="userInfo">
          <v-col class="text-left" cols="3">
            <div class="totalBets">
              <span class="counter">
                <span id="totalBets">160,903,412,709</span>
              </span>
              <span class="label">BETS MADE</span>
            </div>
          </v-col>
          <v-col class="text-center" cols="6">
            <div class="welcome">Welcome to <span>Luckygames</span></div>
          </v-col>
          <v-col class="text-right" cols="3">
            <div class="totalWon">
              <span class="label">TOTAL WON</span>
              <span class="counter">
                <span id="totalWon">146,816.73</span> BTC
              </span>
            </div>
          </v-col>
        </v-row>
        <v-row class="click">
          <v-col class="text-center">
            <a class="popup-show" data-popup="login">Click here to access your account</a>
          </v-col>        
        </v-row>
        <v-row>
          <ul class="gameLOptions">
            <li class="roundedLeft">
              <a id="light" onclick="if (!window.__cfRLUnblockHandlers) return false; uLight(); return false;" data-text="DAY">
                <span class="icon light off"></span>
                <span class="text">NIGHT</span>
              </a>
            </li>
            <li class="roundedNone">
              <a id="sound" onclick="if (!window.__cfRLUnblockHandlers) return false; Game.uSound(); return false;" data-text="SOUND">
                <span class="icon sound on"></span>
                <span class="text">SOUND</span>
              </a>
            </li>
            <li class="roundedNone">
              <a id="eco" onclick="if (!window.__cfRLUnblockHandlers) return false; uEco(); return false;" data-text="ECO">
                <span class="icon eco off"></span>
                <span class="text">ECO</span>
              </a>
            </li>
            <li class="roundedNone">
              <a id="animation" onclick="if (!window.__cfRLUnblockHandlers) return false; Game.uAnimation(); return false;" data-text="ANIMATION">
                <span class="icon animation on"></span>
                <span class="text">ANIMATION</span>
              </a>
            </li>
            <li class="roundedRight">
              <a id="hotkeys" onclick="if (!window.__cfRLUnblockHandlers) return false; Game.uHotkeys(); return false;" data-text="HOTKEYS">
                <span class="icon hotkeys off"></span>
                <span class="text">HOTKEYS</span>
              </a>
            </li>
          </ul>
        </v-row>
        <v-row class="game-dice">
          <v-col class="text-left" cols="3">
            <div class="direction" id="rollUnder" data-direction="under">ROLL UNDER</div>
          </v-col>
          <v-col class="text-center" cols="6">
            <div class="game-box">
              <div class="number prediction">
                <input type="text" id="prediction" value="50" autocomplete="off">
                  <span class="title1">PREDICTION</span>
              </div>
              <div class="devider">
              </div>
              <div class="number result">
                <span id="resultNumber">00</span>
                <span class="title1">LUCKY NUMBER</span>
              </div>
            </div>
          </v-col>
          <v-col class="text-right" cols="3">
            <div class="direction active" id="rollOver" data-direction="over">ROLL OVER</div>
          </v-col>
        </v-row>
      </div>
    </v-container>

    <div class="controlContainer">
      <div class="wrapper">
          <div class="coinContainer mCustomScrollbar _mCS_3" style="overflow:visible">
              <div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_outside" tabindex="0" style="max-height: none;">
                <div id="mCSB_3_container" class="mCSB_container" style="position: relative; top: -11px; left: 0px;" dir="ltr">
                  <div class="coinSearch" style="width: 92px;"><input type="text" id="coinSearch" autocomplete="off" placeholder="Search..." value="">
                    <div class="clean" id="coinCleanSearch">✕</div>
                    <div class="lens" id="coinLensSearch"></div>
                  </div>
                  <div class="coinList">
                    <div class="coinSet popup-show" id="coinSet" data-popup="coinset" style="display: block;"></div>
                    <div class="nothingFound">Nothing found</div>
                  
                    <a href="#" class="" data-coin="zrx">
                      <div class="coin">
                        <span class="name">0x Protocol</span>
                        <span class="balance">0.00000000</span>
                        <img src="/images/icons/zrx.png" alt="0x Protocol" class="mCS_img_loaded">
                      </div>
                    </a>
                    <a href="#" class="" data-coin="zrx">
                      <div class="coin">
                        <span class="name">aelf</span>
                        <span class="balance">0.00000000</span>
                        <img src="/images/icons/elf.png" alt="aelf" class="mCS_img_loaded">
                      </div>
                    </a>
                    <a href="#" class="" data-coin="zrx">
                      <div class="coin">
                        <span class="name">Aeternity</span>
                        <span class="balance">0.00000000</span>
                        <img src="/images/icons/ae.png" alt="Aeternity" class="mCS_img_loaded">
                      </div>
                    </a>
                    <a href="#" class="" data-coin="zrx">
                      <div class="coin">
                        <span class="name">Ardor</span>
                        <span class="balance">0.00000000</span>
                        <img src="/images/icons/ardr.png" alt="Ardor" class="mCS_img_loaded">
                      </div>
                    </a>
                    <a href="#" class="" data-coin="zrx">
                      <div class="coin">
                        <span class="name">Ark</span>
                        <span class="balance">0.00000000</span>
                        <img src="/images/icons/ark.png" alt="Ark" class="mCS_img_loaded">
                      </div>
                    </a>
                    <a href="#" class="" data-coin="zrx">
                      <div class="coin">
                        <span class="name">Augur</span>
                        <span class="balance">0.00000000</span>
                        <img src="/images/icons/rep.png" alt="Augur" class="mCS_img_loaded">
                      </div>
                    </a>
                    <a href="#" class="" data-coin="zrx">
                      <div class="coin">
                        <span class="name">Bancor</span>
                        <span class="balance">0.00000000</span>
                        <img src="/images/icons/bnt.png" alt="Bancor" class="mCS_img_loaded">
                      </div>
                    </a>
                    <a href="#" class="" data-coin="zrx">
                      <div class="coin">
                        <span class="name">Basic Attention</span>
                        <span class="balance">0.00000000</span>
                        <img src="/images/icons/bat.png" alt="Basic Attention" class="mCS_img_loaded">
                      </div>
                    </a>
                    <a href="#" class="" data-coin="zrx">
                      <div class="coin">
                        <span class="name">Bean Cash</span>
                        <span class="balance">0.00000000</span>
                        <img src="/images/icons/bitb.png" alt="Bean Cash" class="mCS_img_loaded">
                      </div>
                    </a>
                    <a href="#" class="" data-coin="zrx">
                      <div class="coin">
                        <span class="name">Bancor</span>
                        <span class="balance">0.00000000</span>
                        <img src="/images/icons/bnt.png" alt="Bancor" class="mCS_img_loaded">
                      </div>
                    </a>
                    <a href="#" class="" data-coin="zrx">
                      <div class="coin">
                        <span class="name">Basic Attention</span>
                        <span class="balance">0.00000000</span>
                        <img src="/images/icons/bat.png" alt="Basic Attention" class="mCS_img_loaded">
                      </div>
                    </a>
                    <a href="#" class="" data-coin="zrx">
                      <div class="coin">
                        <span class="name">Bean Cash</span>
                        <span class="balance">0.00000000</span>
                        <img src="/images/icons/bitb.png" alt="Bean Cash" class="mCS_img_loaded">
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;">
                <div class="mCSB_draggerContainer">
                  <div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 16px; max-height: 240px; top: 22px;">
                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                  </div>
                  <div class="mCSB_draggerRail"></div>
                </div>
              </div>
          </div>
          <div class="balanceContainer userBalance">
            <div class="inputBox">
              <div class="label">LUCKY Balance (<span id="ucount">0</span> unconfirmed)</div>
              <input type="text" id="balance" value="0.00000000" readonly="">
              <input type="hidden" id="coin" value="lucky">
              <input type="hidden" id="coinID" value="40">
              <input type="hidden" id="maxBetAmount" value="10000000">
            </div>
            <div class="inputBox">
              <div class="label">LUCKY Deposit address</div>
              <input type="text" id="address" class="address" onclick="if (!window.__cfRLUnblockHandlers) return false; select( this ); return false;" name="address" value="Wallet Maintenance" readonly="">
            </div>
            <button class="btn green popup-show" data-popup="login">DEPOSIT</button>
            <button class="btn red popup-show" data-popup="login">WITHDRAW</button>
          </div>
          <div class="betContainer">
            <div class="inputBox">
              <div class="label">Bet Amount <span id="multiplyBet">X2</span><span id="splitBet">1/2</span><span id="minBet">MIN</span><span id="maxBet">MAX</span></div>
              <input type="text" class="amount" id="betAmount" value="0.00000000" placeholder="0.00000000" autocomplete="off">
            </div>
            <div class="inputBox last">
              <div class="label">Win Chance</div>
              <input type="text" id="winChance" value="0%" readonly="">
            </div>
            <div class="inputBox">
              <div class="label">Profit on Win</div>
              <input type="text" class="amount" id="profitOnWin" value="0.00000000" readonly="">
            </div>
            <div class="inputBox last">
              <div class="label">Multiplier</div>
              <input type="text" id="multiplier" value="0x" readonly="">
            </div>
            <button class="btn blue" id="playBtn" onclick="if (!window.__cfRLUnblockHandlers) return false; Game.play()">ROLL OVER 50</button>
            <button class="btn grey popup-show" data-popup="autoplay" id="autoPlayBtn">AUTO</button>
          </div>
      </div>
    </div>
    <div class="listContainer">
      <div class="wrapper">
        <ul class="menu">
          <li class="active" id="myBets"><a href="#">My Bets</a></li>
          <li class="" id="allBets"><a href="#">All Bets</a></li>
          <li class="" id="highBets"><a href="#">High Rollers<div class="newBets"></div></a></li>
          <li class="" id="rareBets"><a href="#">Rare Wins<div class="newBets"></div></a></li>
        </ul>
        <div class="table">
          <div class="thead">
            <div class="tr">
              <div class="th">ID</div>
              <div class="th">TIME / PLAYER</div>
              <div class="th center">COIN</div>
              <div class="th center">PREDICTION / LUCKY NUMBER</div>
              <div class="th right">BET</div>
              <div class="th right">PAYOUT</div>
            </div>
          </div>
          <div class="tbody">
            <div class="tr full">
              <div class="td center">NOTHING FOUND</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="frontText">
      <div class="wrapper">
        <h1>The Best LUCKY Dice Gambling Experience</h1>
        <p>Welcome to Luckygames, the Best LUCKY Dice Gambling Site. The main goal is to bring you the greatest gambling experience ever with all the high-end features. You are able to play with 103 cryptocurrencies and, if you need, exchange them to another cryptocurrency with just a few clicks. Provably Fair system makes your game 100% manipulation free. Low House Edge (1%) provides a reasonable opportunity to win. We are always open for your feedbacks and suggestions that may help to improve ourselves and our favourite website. Luckygames will make you feel lucky for real.</p>
        <h2>LUCKY Dice Game Description</h2>
        <p> Well known Dice game with the highest multiplier available (99x) and extremely fast automated betting support. The player is available to choose a number from 1 to 98 and a direction of prediction (Under/Over). After choosing and betting, the dice starts moving and choosing the lucky number. You win, if the lucky number hits the predicted range. </p>
      </div>
    </div>


  </div>
</template>
<script>
import axios from 'axios'
import { decimal } from '~/plugins/format'
import { mapGetters } from 'vuex'
import { config } from '~/plugins/config'
import GameCard from '~/components/GameCard'
import Shuffle from 'shufflejs'

export default {
  components: { GameCard },

  metaInfo () {
    return {
      title: this.$t('Fair online casino games')
    }
  },

  data () {
    return {
      selectedCategory: null,
      shuffle: null,
      recentGames: null
    }
  },

  computed: {
    ...mapGetters({
      games: 'package-manager/games'
    }),
    appName () {
      return config('app.name')
    },
    appLogo () {
      return config('app.logo')
    },
    appBanner () {
      return config('app.banner')
    },
    categories () {
      let categories = []

      Object.keys(this.games).forEach(id => {
        const variations = this.config(id + '.variations')

        if (variations) {
          variations.forEach(variation => {
            categories = categories.concat(variation.categories)
          })
        } else {
          categories = categories.concat(this.config(id + '.categories'))
        }
      })

      // remove duplicates
      return categories.filter((category, i) => category && categories.indexOf(category) === i)
    },
    paymentsPackageEnabled () {
      return this.$store.getters['package-manager/get']('payments')
    },
    slider () {
      return config('settings.content.home.slider')
    },
    slidesCount () {
      return this.slider ? this.slider.slides.length : 0
    }
  },

  async created () {
    const { data } = await axios.get('/api/public/games/recent')

    this.recentGames = data
  },

  methods: {
    config,
    decimal,
    filterByCategory (category) {
      if (!this.shuffle) {
        this.shuffle = new Shuffle(this.$refs.games, { itemSelector: '.game-card' })
      }

      this.shuffle.filter(category)
    }
  }
}
</script>
<style lang="scss" scoped>
.v-chip-group::v-deep {
  .v-slide-group__content {
    justify-content: center;
  }
}

.darken-50 {
  background: rgba(0, 0, 0, 0.5);
}

.darken-60 {
  background: rgba(0, 0, 0, 0.6);
}
#gameContainer .totalBets .counter, #gameContainer .totalWon .counter {
    display: inline-block;
    color: #058bd8;
    font-size: 22px;
    font-family: "Segoe UI Bold";
    vertical-align: middle;
}
#gameContainer .totalBets .label, #gameContainer .totalWon .label {
    color: #777777;
    display: inline-block;
    vertical-align: middle;
    font-size: 14px;
}
#gameContainer .userInfo .welcome {
    text-align: center;
    color: #ffffff;
    font-size: 32px;
    padding-bottom: 10px;
    text-shadow: 1px 2px 3px rgba(0, 0, 0, 1);
}
#gameContainer .userInfo .welcome span {
    color: #058bd8;
}
#gameContainer .totalBets {
    position: relative;
    left: 0;
    top: 18px;
    text-align: center;
}
#gameContainer .totalWon {
    position: relative;
    right: 0;
    top: 18px;
    text-align: center;
}
#gameContainer a {
    text-shadow: 1px 2px 3px rgba(0, 0, 0, 1);
}
a:hover, a.nonactive {
    color: #ffffff;
    text-decoration: none;
}
a, a:visited {
    color: #9f9f9f;
    text-decoration: none;
    cursor: pointer;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}

#gameContainer ul.gameLOptions li, #gameContainer ul.gameROptions li {
    display: inline;
}


#gameContainer ul.gameLOptions, #gameContainer ul.gameROptions {
    list-style: none;
    margin: 0;
    padding: 0;
    z-index: 3;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    outline: 0;
}
#gameContainer ul.gameLOptions li.roundedLeft a {
    -webkit-border-radius: 5px 0 0 5px;
    -moz-border-radius: 5px 0 0 5px;
    border-radius: 5px 0 0 5px;
}
#gameContainer ul.gameLOptions li a, #gameContainer ul.gameROptions li a {
    float: left;
    padding: 7px 15px;
    margin: 0 0 0 1px;
    font-size: 12px;
    text-align: center;
    background: #1e1e1e;
    color: #ffffff;
    opacity: 0.40;
    -ms-transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -o-transform: scale(1);
}
#gameContainer ul.gameLOptions li .icon, #gameContainer ul.gameROptions li .icon {
    margin: 3px 5px 0 0;
    vertical-align: top;
}
.icon.light.off {
    background-position: -13px 0;
}
.icon.light {
    display: inline-block;
    width: 13px;
    height: 11px;
    // background: url(images/light-icon.png) no-repeat;
}
.icon {
    font-size: 14px;
    font-family: "Segoe UI Bold";
    display: inline-block;
    color: #ffffff;
    cursor: pointer;
    text-transform: uppercase;
    opacity: 0.6;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}
#gameContainer ul.gameLOptions li a, #gameContainer ul.gameROptions li a {
    float: left;
    padding: 7px 15px;
    margin: 0 0 0 1px;
    font-size: 12px;
    text-align: center;
    background: #1e1e1e;
    color: #ffffff;
    opacity: 0.40;
    -ms-transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -o-transform: scale(1);
}
#gameContainer ul.gameLOptions li.roundedNone a {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
}
.icon.sound.on {
    background-position: 0 0;
}
.icon.sound {
    display: inline-block;
    width: 13px;
    height: 11px;
    background: url(/images/sound-icon.png) no-repeat;
}
.icon.light {
    display: inline-block;
    width: 13px;
    height: 11px;
    background: url(/images/light-icon.png) no-repeat;
}
.icon {
    font-size: 14px;
    font-family: "Segoe UI Bold";
    display: inline-block;
    color: #ffffff;
    cursor: pointer;
    text-transform: uppercase;
    opacity: 0.6;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}
.icon.eco.off {
    background-position: -12px 0;
}
.icon.eco {
    display: inline-block;
    width: 12px;
    height: 12px;
    
    background: url(/images/eco-icon.png?1) no-repeat;
}
.icon.animation {
    display: inline-block;
    width: 11px;
    height: 11px;
    background: url(/images/animation-icon.png) no-repeat;
}
.icon.animation.on {
    background-position: 0 0;
}
.icon.hotkeys.off {
    background-position: -12px 0;
}
.icon.hotkeys {
    display: inline-block;
    width: 11px;
    height: 11px;
    background: url(/images/hotkeys-icon.png) no-repeat;
}
#gameContainer .click {
  margin-top: 30px;
}
#gameContainer .game-dice {
  margin-top: 30px;
}

#gameContainer .game-dice #rollOver {
    margin-right: 10px;
}
#gameContainer .game-dice .direction.active {
    color: #ffffff;
    border-bottom: 1px #ffffff solid;
    display: table;
    float: right;
}
#gameContainer .game-dice .direction {
    margin-top: 90px;
    font-size: 32px;
    cursor: pointer;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}

#gameContainer .game-dice #rollUnder {
    margin-left: 10px;
}

#gameContainer .game-dice .game-box {
    position: relative;
    display: inline-block;
    text-align: center;
    font-size: 130px;
    height: 220px;
    font-weight: 600;
    font-family: "Segoe UI Bold";
    padding: 0 40px 0;
    color: #ffffff;
    background: rgba(0, 0, 0, 0.6);
    border: 5px solid rgba(0, 0, 0, 0.7);
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
}
#gameContainer .game-dice .game-box .number.prediction, #gameContainer .game-dice .game-box .number.result {
    color: #2eab5b;
}
#gameContainer .game-dice .game-box .number {
    width: 150px;
    text-align: center;
    display: inline-block;
    vertical-align: top;
}
#gameContainer .game-dice .game-box .devider {
    position: relative;
    display: inline-block;
    width: 5px;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    vertical-align: top;
}
#gameContainer .game-dice .game-box span.title1 {
    display: block;
    font-size: 14px !important;
    color: #999999;    
    margin-top: -20px;
}
#gameContainer .game-dice .game-box .number input {
    background: transparent;
    font-family: "Segoe UI Bold";
    border: none;
    font-size: 130px;
    color: #ffffff;
    width: 145px;
    text-align: center;
    outline: none;
    padding: 0;
    margin: 0;
}
.wrapper {
    position: relative;
    width: 1000px;
    margin: 0 auto;
}
#header .header-logo {
    display: inline-block;
    // background: url(../images/logo.png?5) no-repeat;
    width: 220px;
    height: 70px;
    outline: none;
    opacity: 0.7;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}
#header .header-menu li:first-child span {
    border-left: none!important;
}
#header .header-menu li a span {
    border-left: 1px #383838 solid;
    padding: 0 17px;
}
#header .header-menu li a {
    color: #9f9f9f;
    display: inline-block;
    padding: 27px 0;
    font-size: 13px;
    text-transform: uppercase;
    z-index: 10;
}

#header .header-menu {
    list-style: none;
    padding: 0;
    margin: 0;
}
.clearfix {
    zoom: 1;
}
.clearfix:before, .clearfix:after {
    content: "";
    display: table;
}


img {
    outline: none;
}
.inputBox, .textBox {
    margin: 0 0 10px;
}
input[type=text]:read-only {
    color: #b0b0b0;
}
input[type=text]:focus {
  border-bottom: 1px solid #2097e0!important;
}
input, textarea {
    width: 100%;
    background: none;
    background: #131313;
    border: 1px #222222 solid;
    font-size: 20px;
    font-weight: 100;
    font-family: "Segoe UI Classic";
    padding: 4px 15px 7px;
    margin: 0;
    color: #ffffff;
    outline: none;
    box-sizing: border-box;
    text-align: center;
    resize: none;
    word-break: break-word;
    overflow: hidden;
    cursor: text;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .8);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .8);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .8);
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}
.amount, .profit {
    width: 270px;
}
.label {
    font-size: 16px;
    margin: 0 0 7px;
    color: #777777;
    span {
      font-size: 13px;
      padding: 1px 6px 3px;
      margin: 0 1px;
      background: #1f1f1f;
      -webkit-border-radius: 2px;
      -moz-border-radius: 2px;
      border-radius: 2px;
      color: #9f9f9f;
      text-decoration: none;
      cursor: pointer;
      -webkit-transition: all 0.3s ease-out;
      -moz-transition: all 0.3s ease-out;
      -o-transition: all 0.3s ease-out;
      -ms-transition: all 0.3s ease-out;
      transition: all 0.3s ease-out;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      outline: 0;
    }
}
.btn {
    width: 100%;
    position: relative;
    overflow: hidden;
    border: none;
    text-align: center;
    color: #ffffff;
    line-height: 40px;
    font-size: 16px;
    font-weight: 200;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, .5);
    margin: 10px 0 0;
    padding: 2px 0;
    cursor: pointer;
    box-sizing: border-box;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    -ms-transition: all 0.3s linear;
    transition: all 0.3s linear;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    outline: 0;
}
.green {
  background: #2eab5b;
}
.red {
    background: #ab2e40;
    float: right;
}
.blue {
  background: #307DAC!important;
}
.grey {
  color: #ffffff;
  background: #222222!important;
}
.center {
  text-align: center!important;
}
.right {
  text-align: right!important;
}
.wrapper {
  position: relative;
  width: 1000px;
  margin: 0 auto;
}
.controlContainer {
    height: 250px;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    outline: 0;
  
  .coinContainer {
    float: left;
    position: relative;
    width: 165px;
    height: 250px;
    overflow-y: hidden;
    padding: 0 20px 0 0;
    box-sizing: border-box;
    .coinSearch {
      width: 92px;
      position: relative;
      margin: 15px 0 8px;
      input {
        width: 100%;
        padding: 7px 30px 7px 9px;
        font-size: 14px;
        color: #ffffff;
        background: transparent;
        border: 1px #222222 solid;
        box-sizing: border-box;
        outline: none;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        opacity: 0.6;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .8);
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .8);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .8);
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
      }
      .clean {
        display: none;
        position: absolute;
        font-size: 14px;
        top: 8px;
        right: 15px;
        color: #777777;
        opacity: 0.6;
        cursor: pointer;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
      }
      .lens {
        background: url(/images/icons/search-coin-icon.png);
        position: absolute;
        top: 11px;
        right: 14px;
        width: 14px;
        height: 14px;
        cursor: text;
        opacity: 0.6;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
      }
    }
    .coinSet {
      width: 42px;
      height: 33px;
      position: absolute;
      right: 1px;
      top: 16px;
      background: #191919 url(/images/icons/settings-icon.png) no-repeat 50% 50%;
      cursor: pointer;
      box-sizing: border-box;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
      opacity: 0.6;
      -webkit-transition: all 0.3s ease-out;
      -moz-transition: all 0.3s ease-out;
      -o-transition: all 0.3s ease-out;
      -ms-transition: all 0.3s ease-out;
      transition: all 0.3s ease-out;
    }
    .nothingFound {
      display: none;
      background: #151515;
      padding: 7px 10px;
      font-size: 13px;
      box-sizing: border-box;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
    }
    .coin {
      width: 100%;
      display: block;
      padding: 7px 9px 7px 9px;
      height: 36px;
      position: relative;
      margin-bottom: 2px;
      box-sizing: border-box;
      text-overflow: ellipsis;
      white-space: nowrap;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
      span {
        display: block;
        width: 95px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: #777777;
        font-size: 16px;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
      }
      .balance {
        display: none;
      }
      img {
        position: absolute;
        right: 9px;
        top: 6px;
        width: 25px;
        opacity: 0.40;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
      }
    }
  }
  
  .mCustomScrollbar {
    -ms-touch-action: none;
    touch-action: none;
  }
  .mCustomScrollBox {
    position: relative;
    overflow: hidden;
    height: 100%;
    max-width: 100%;
    outline: none;
    direction: ltr;
  }
  .mCSB_container {
    overflow: hidden;
    width: auto;
    height: auto;
  }
  .mCSB_scrollTools, .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar, .mCSB_scrollTools .mCSB_buttonUp, .mCSB_scrollTools .mCSB_buttonDown, .mCSB_scrollTools .mCSB_buttonLeft, .mCSB_scrollTools .mCSB_buttonRight {
    /* -webkit-transition: opacity .2s ease-in-out, background-color .2s ease-in-out; */
    -moz-transition: opacity .2s ease-in-out, background-color .2s ease-in-out;
    -o-transition: opacity .2s ease-in-out, background-color .2s ease-in-out;
    /* transition: opacity .2s ease-in-out, background-color .2s ease-in-out; */
}
  .mCSB_scrollTools {
    right: -10px;
    opacity: 0.75;
  }
  .mCSB_scrollTools {
    position: absolute;
    width: 16px;
    height: auto;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    .mCSB_draggerContainer {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      height: auto;
    }
    .mCSB_dragger {
      cursor: pointer;
      width: 100%;
      height: 30px;
      z-index: 1;
    }
    .mCSB_draggerRail {
      background-color: #171717;
      width: 2px;
      height: 100%;
      margin: 0 auto;
    }
  }
  .balanceContainer {
    float: left;
    width: 395px;
    height: 250px;
    border-right: 2px #171717 solid;
    padding: 20px 30px;
    box-sizing: border-box;
    .inputBox {
      position: relative;
      text-align: center;
      .address {
        font-size: 14px;
        padding: 9px 10px 10px;
        cursor: pointer;
      }
    }
    button {
      width: 157px;
    }
    .green {
      float: left;
    }
    .red {
      float: right!important;
    }
  }
  .betContainer {
    float: left;
    width: 440px;
    height: 100%;
    padding: 20px 0 20px 30px;
    box-sizing: border-box;
    .inputBox, .selectBox {
      float: left;
      text-align: center;
    }
    .last {
      float: right;
      width: 120px;
    }
    .blue {
      float: left;
      width: 270px;
    }
    .grey {
      float: right;
      width: 120px;
    }
  }
}
.listContainer {
  background: url(/images/listbg-dice.png) no-repeat 50% 0;
  height: 237px;
  ul {
    padding: 40px 0 25px 0;
    margin: 0;
    list-style: none;
    text-align: center;
    li {
      position: relative;
      display: inline-block;
      margin: 0 20px;
    }
  }
  .table {
    position: relative;
    display: table;
    width: 100%;
    padding: 20px 0 30px;
    font-size: 16px;
    font-weight: 100;
    font-family: "Segoe UI Classic";
    border-spacing: 0;
    border-collapse: separate;
    .thead {
      display: table-header-group;
      .th:first-child {
        padding-left: 20px;
      }
      .th {
        display: table-cell;
        color: #6b99b6;
        padding: 10px 7px;
        text-align: left;
        border-bottom: 1px #000000 solid;
        text-transform: uppercase;
      }
    }
    .tr {
      display: table-row;
      .td {
        background-color: #141414;
        width: 100%;
        position: absolute;
        padding-right: 0;
        padding-left: 0;
      }
      .td:last-child {
        padding-right: 20px;
      }
      .td:first-child {
        padding-left: 20px;
      }
      .td {
        display: table-cell;
        padding: 10px 7px 13px;
        vertical-align: middle;
        border-bottom: 1px #000000 solid;
      }
    }
    .tr:nth-child(odd) {
      background-color: #151515;
    }
    .full {
      width: 100%;
      height: 45px;
    }
    .tbody {
      display: table-row-group;
    }
  }
}
.frontText {
  margin: 20px 0 50px;
  .wrapper {
    width: 900px!important;
  }
  h1, h2 {
    font-weight: 500;
    font-size: 24px;
    line-height: 24px;
    margin: 0;
    padding: 0;
    margin-bottom: 20px;
    color: #058bd8;
  }
  p {
    font-size: 16px;
    margin-bottom: 40px;
    color: #777777;
    font-weight: normal!important;
  }
}
</style>

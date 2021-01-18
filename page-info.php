
<?php get_header(); ?>
<main>
    <section class="infoMain">
      <div class="infoMain-img">
        <img src="<?php bloginfo('template_url');?>/img/info-top.jpg"> 
      </div>
      <div class="infoMain-text">
        <p>Information</p>
      </div>
    </section>
    
    <section class="infoNav">
      <a>会社概要 /</a>
      <a> 代表メッセージ /</a>
      <a>ハマ建の歴史</a>
    </section>

    <section class="aboutGroup">
      <div class="company">
        <div class="company-about">
          <h2>会社概要</h2>
        </div>
        
        <div class="company-name">
          <h3>会社名</h3>
          <p>株式会社ハマ建設</p>
        </div>

        <div class="company-year">
          <h3>創業</h3>
          <p>1980年4月</p>
        </div>

        <div class="company-many">
          <h3>資本金</h3>
          <p>2200万円</p>
        </div>

        <div class="company-president">
          <h3>代表取締役</h3>
          <p>浜崎 葉真雄</p>
        </div>

        <div class="company-employee">
          <h3>従業員数</h3>
          <p>2638名</p>
        </div>
      </div>


      <div class="location">
        <div class="location-title">
          <h2>所在地</h2>
        </div>

        <div class="location-head">
          <h3>本社</h3>
          <p>〒103-0001 東京都中央区日本橋小伝馬町2</p>
        </div>

        <div class="location-groupTitle">
          <h2>グループ会社</h2>
        </div>

        <div class="location-group1">
          <h3>ハマ土木事業株式会社</h3>
          <p>〒103-0001 東京都港区2-21</p>
        </div>

        <div class="location-group2">
          <h3>ハマ橋梁事業株式会社</h3>
          <p>〒103-0001 千葉県船橋市2住友ビル2F</p>
        </div>

        <div class="location-group3">
          <h3>ハマ道路事業株式会社</h3>
          <p>〒103-0001 千葉県蕨市40-2</p>
        </div>
        <div class="location-group4">
          <h3>ハマダム事業株式会社</h3>
          <p>〒103-0001 神奈川県横浜市4-50</p>
        </div>
      </div>

      <div class="location-map">
        <div class="map">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4550975365996!2d139.77613346517165!3d35.69041693019218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018895350ce38b9%3A0x7b188a3811a56926!2z44CSMTAzLTAwMDEg5p2x5Lqs6YO95Lit5aSu5Yy65pel5pys5qmL5bCP5Lyd6aas55S677yS!5e0!3m2!1sja!2sjp!4v1599630317847!5m2!1sja!2sjp"
            width="800" 
            height="600"
            frameborder="0" 
            style="border:0" 
            allowfullscreen>
          </iframe>
        </div>
      </div>
      <hr class="locationUnder">
      
    </section>

      <section class="message">
        <div class="message-ttl">
          <h2>代表メッセージ</h2>
          <div class="messageImg">
            <img src="<?php bloginfo('template_url');?>/img/info-ceo.jpg">
          </div>
        </div>

        <div class="message-main">

          <p class="message-main1">弊社、株式会社ハマ建設は、1980年に土木
            総合会社として創業いたしました。
          </p>

          <p class="message-main2">弊社、株式会社ハマ建設は、1980年に土木
            総合会社として創業いたしました。弊社、
            株式会社ハマ建設は、1980年に土木総合会
            社として創業いたしました。株式会社ハマ
            建設は、1980年に土木総合会社として創業
            いたしました。
          </p>

          <p class="message-main3">弊社、株式会社ハマ建設は、1980年に土木
            総合会社として創業いたしました。弊社、
            株式会社ハマ建設は、1980年に土木総合会
            社として創業いたしました。株式会社ハマ
            建設は、1980年に土木総合会社として創業
            いたしました。
          </p>
          <div class="message-president">
            <h2>代表取締役</h2>
            <p>浜崎葉真雄</p>
          </div>
        </div>
      </section>

      <section class="hamaHistory">

        <div class="history">
          <div class="history-ttl">
            <h2>ハマ建の歴史</h2>
          </div>

          <div class="history-1980">
            <span>1980</span>
            <p>浜崎昂が東京江戸川区にて浜崎商事を創
              業。主に測量を主軸に経営を開始。</p>
          </div>

          <div class="history-1989">
            <span>1989</span>
            <p>社名を浜崎総合土木会社に改める。測量だ
              けでなく土木事業全般に従事する。</p>
          </div>

          <div class="history-2000">
            <span>2000</span>
            <p>Civil株式会社と合併し株式会社ハマ建設に改める。
              橋梁事業と道路事業をスタート。</p>
          </div>

          <div class="history-2014">
            <span>2014</span>
            <p>ダム事業をスタートするため、株式会社トモと合併する。</p>
          </div>
        </div>
        <div class="history-img"> 
          <img src="img/info-history.jpg">
        </div>
      </section>

    <?php get_template_part('contact'); ?>
</main>

<?php get_footer(); ?>


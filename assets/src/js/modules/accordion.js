export default () => {

  if (document.querySelector(".js-accordion") != null) {
    addEventListener("load", function () {
      const accordionList = document.querySelectorAll(".js-accordionList");
      const accordionListLength = accordionList.length;

      accordionList.forEach(function (elem, index) {
        const accordionTrigger = elem.querySelector(".js-accordionTrigger");
        const accordionContent = elem.querySelector(".js-accordionContent");
        const accordionContentH = accordionContent.offsetHeight; // それぞれのパネルの本来の高さを格納

        elem.classList.add("is-hide"); // 全トリガーの開閉アイコンを閉状態に設定
        elem.querySelector(".js-accordionContent").style.height = "0px"; // それぞれのパネルの高さを0にして閉状態に

        accordionTrigger.addEventListener("click", function (event) {
          // クリックされたトリガーが閉状態であれば
          if (elem.classList.contains("is-hide") === true) {
            for (let i = 0; i < accordionListLength; i++) {
              // 一旦全てのトリガーの選択状態をfalseに
              accordionList[i].querySelector(".js-accordionTrigger").setAttribute("aria-expanded", "false");
              // 一旦全てのパネルの非表示状態をfalseに
              accordionList[i].querySelector(".js-accordionContent").setAttribute("aria-hidden", "true");
              // 一旦全てのトリガーを閉状態に
              accordionList[i].classList.add("is-hide");
              // 一旦パネルの高さをautoから本来の高さに戻す(auto → 0 はtransitionしないため)
              accordionList[i].querySelector(".js-accordionContent").style.height = accordionContentH + "px";
              // リフローを発生させてパネルのheightがautoから本来の高さに変わったことをブラウザに描画させる
              document.defaultView.getComputedStyle(accordionList[i].querySelector(".js-accordionContent"), null).height;
              accordionList[i].querySelector(".js-accordionContent").style.height = 0 + "px";
            }
            // クリックされたトリガーの選択状態をtrueに
            accordionTrigger.setAttribute("aria-expanded", "true");

            //クリックされたトリガーに対応するパネルの非表示状態をtureに
            accordionContent.setAttribute("aria-hidden", "false");

            // クリックされたトリガーの閉状態を解除
            elem.classList.remove("is-hide");
            // クリックされたトリガーの直下パネルのみ一旦本来の高さに設定
            accordionContent.style.height = accordionContentH + "px";
            // クリックされたトリガーの直下パネルを取得
            const nextAccordionContent = event.target.closest(".accordionList").querySelector(".accordionList__content");
            // パネルが閉状態から開状態に変化し終わったら ↓ を実行
            nextAccordionContent.addEventListener("transitionend", function () {
              // 高さが0ではない(開状態の)パネルのみ、heightをautoにしてresizeに対応
              if (document.defaultView.getComputedStyle(nextAccordionContent, null).height !== "0px") {
                nextAccordionContent.style.height = "auto";
              }
            });
          } else {
            // クリックされたトリガーの選択状態をfalseに
            accordionTrigger.setAttribute("aria-expanded", "false");
            //クリックされたトリガーに対応するパネルの非表示状態をtrueに
            accordionContent.setAttribute("aria-hidden", "true");
            // クリックされたトリガーが開状態であれば
            for (let i = 0; i < accordionListLength; i++) {
              // 一旦パネルの高さをautoから本来の高さに戻す(auto → 0 はtransitionしないため)
              accordionList[i].querySelector(".js-accordionContent").style.height = accordionContentH + "px";
              // リフローを発生させてパネルのheightがautoから本来の高さに変わったことをブラウザに描画させる
              document.defaultView.getComputedStyle(accordionList[i].querySelector(".js-accordionContent"), null).height;
              // パネルを本来の高さから0までアニメーション
              accordionList[i].querySelector(".js-accordionContent").style.height = 0 + "px";
              // 全てのトリガーのアイコンを閉状態に更新
              accordionList[i].classList.add("is-hide");
            }
          }
        });
      });
    });
    // tabキーでfocusされたとき、enterでパネルを開けるように
    function handleKeyDown(event) {
      // 押されたキーの種類を判別
      if (event.code === "Enter") {
        document.activeElement.click();
      }
    }

    addEventListener("keydown", handleKeyDown);
  }
}
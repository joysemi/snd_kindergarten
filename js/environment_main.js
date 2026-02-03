document.addEventListener('DOMContentLoaded', () => {
    const tabMenu = document.querySelectorAll('#snd_space_tabmenu .tabmenu div');
    const contentsWrap = document.querySelector('#snd_space_contents_wrap');

    let selectedTab = tabMenu[0];

    // 첫 탭 초기 활성화
    activateTab(0);
    loadTabContents(0);

    tabMenu.forEach((item, index) => {
        item.addEventListener('click', () => {
            activateTab(index);
            loadTabContents(index);
        });
    });

    function activateTab(index) {
        if (selectedTab !== tabMenu[index]) {
            selectedTab.classList.remove('selected');
            selectedTab = tabMenu[index];
            selectedTab.classList.add('selected');
        }
    }

    function loadTabContents(tabIndex) {
        const folder = tabIndex === 0 ? 'forest' : 'school';
        const files = tabIndex === 0
            ? ['forest_0.html','forest_1.html','forest_2.html','forest_3.html']
            : ['school_0.html','school_1.html','school_2.html','school_3.html'];

        const container = contentsWrap.children[tabIndex];
        if (!container) return;

        // mainArea 만들기
        let mainArea = container.querySelector('.space_main');
        if (!mainArea) {
            mainArea = document.createElement('div');
            mainArea.classList.add('space_main');
            container.appendChild(mainArea);
        }
        mainArea.innerHTML = ''; // 초기화

        const menuItems = container.querySelectorAll('.space_sidebar li');

        menuItems.forEach((li, index) => {
            li.classList.remove('active');
            li.onclick = () => {
                menuItems.forEach(m => m.classList.remove('active'));
                li.classList.add('active');

                fetch(`/snd_kindergarten/data/sub_environment/${folder}/${files[index]}`)
                    .then(res => res.text())
                    .then(data => {
                        mainArea.innerHTML = data;
                    })
                    .catch(err => console.error(files[index] + " 로드 실패:", err));
            };
        });

        // 첫 메뉴 자동 클릭
        menuItems[0].click();
    }
});
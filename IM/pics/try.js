const tabs = document.querySelectorAll('[data-target]');
const tabConstents = document.querySelectorAll('[data-content]');

tabs.forEach ( tab => {
    tab.addEventListener('click', () =>{
        const target = document.querySelector(tab.dataset.tabTarget)
        tabConstents.forEach(tabContent => { 
            tabContent.classList.remove('active')
        })
    target.classList.add('active')
    })
})
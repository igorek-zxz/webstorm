const stickyHeader = () => {
    const headerTag = document.querySelector('header');
    const firstRow = document.querySelector('.storm-header__row-first');
    const adminBar = document.querySelector('#wpadminbar');
    let heightHeader = headerTag.clientHeight;

    const addSticky = () => {
        document.body.style.marginTop = heightHeader + 'px';
        headerTag.style.position = 'fixed';
        if (adminBar !== null) {
            headerTag.style.top = adminBar.clientHeight + 'px';
        } else {
            headerTag.style.top = '0';
        }
        firstRow.style.display = 'none';
    }
    const removeSticky = () => {
        document.body.style.marginTop = '';
        headerTag.style.position = 'inherit';
        headerTag.style.top = '';
        firstRow.style.display = 'block';
    }

    window.addEventListener('resize', () => {
        heightHeader = headerTag.clientHeight;
        browserWidth = document.documentElement.clientWidth;
    });
    window.addEventListener('scroll', () => {
        let scrollDistans = document.documentElement.scrollTop;
        (scrollDistans > heightHeader * 2) ? addSticky() : removeSticky();
    });
}
export default stickyHeader;

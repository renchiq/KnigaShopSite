let categoryPluses = document.querySelectorAll('.category__icon');

const openNextCategoryListener = event => {
    let parentVisibleBlock = event.target.closest('.category__visible');
    let nextHiddenElement = parentVisibleBlock.nextElementSibling;
    if (nextHiddenElement.style.maxHeight) {
        nextHiddenElement.style.maxHeight = null;
    } else {
        nextHiddenElement.style.maxHeight = nextHiddenElement.scrollHeight + 'px';
    }
}

categoryPluses.forEach(block => {
    block.addEventListener('click', openNextCategoryListener);
});
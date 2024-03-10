document.addEventListener('DOMContentLoaded', function() {
    window.onload = function(e){
        $.ajax({
            type: "GET",
            url: "php/test_routes_loader.php",
            dataType: "text",
            success: function (response) {
                $('.card').append(response);

                // Получаем все элементы details внутри div с классом "card"
                const detailsElements = document.querySelectorAll('.card details');

                // Проходимся по каждому элементу details
                detailsElements.forEach(detailsElement => {
                    // Скрываем все блоки
                    detailsElement.removeAttribute('open');

                    // Добавляем обработчик события при клике на summary
                    detailsElement.querySelector('summary').addEventListener('click', () => {
                        // Закрываем все открытые блоки, кроме текущего
                        detailsElements.forEach(otherDetailsElement => {
                            if (otherDetailsElement !== detailsElement) {
                                otherDetailsElement.removeAttribute('open');
                            }
                        });
                    });
                });
            }
        });
    }
});
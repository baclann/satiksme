<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="card">
  <h1>Reāllaika Maršruti</h1>
  

</div>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        window.onload = function(e){

            $.ajax({
                type: "GET",
                url: "test_routes_loader.php",
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
        document.querySelectorAll('.info summary').forEach(summary => {
    summary.addEventListener('click', function() {
        this.parentElement.classList.toggle('active');
    });
});
    });
</script>


</body>
</html>
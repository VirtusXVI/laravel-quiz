<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/app.css">
        <title>Quiz</title>
    </head>
    <body>
        <div class="flex wrapper">
            <div class="first flex justify-center items-center">
                <div class="max-w-sm">
                    <h1 class="text-3xl font-bold">
                        Quale paese in Europa detiene il record per il maggiore consumo di acqua in bottiglia?
                    </h1>
                    <p class="mt-7 text-xl">
                        Sottotitolo eventuale, non più lungo di così: 
                        Lorem ipsum dolor sit amet, consectetur 
                        adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut 
                        enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi
                    </p>
                </div>
            </div>
            <div class="flex justify-center items-center">
                @if (session('success'))
                    <div class="check">
                        <h2 class="text-3xl font-bold text-green-400">Giusto</h2>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-400 my-10">
                                Italia
                            </h2>
                            <p class="text-gray-400 ">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ratione molestias animi aliquam deleniti impedit facere ipsum suscipit tempora sequi, quo, ullam nobis blanditiis debitis, harum nostrum ipsa porro ducimus.
                            </p>
                        </div>
                    </div>
                @endif
                @if (session('error'))
                    <div class="check">
                        <h2 class="text-3xl font-bold text-red-400">Purtroppo no, la risposta corretta è...</h2>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-400 my-10">
                                Italia
                            </h2>
                            <p class="text-gray-400 ">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ratione molestias animi aliquam deleniti impedit facere ipsum suscipit tempora sequi, quo, ullam nobis blanditiis debitis, harum nostrum ipsa porro ducimus.
                            </p>
                        </div>
                    </div>
                @endif
                @if(!session('success') && !session('error'))
                    <form method="post" class="flex flex-col" action="{{ url('check-answer') }}">
                        @csrf
                        <div class="flex flex-col gap-6 mb-10">
                            <label onclick="select()" id="first_answer" for="answer_1" class="font-bold answer">
                                Francia
                                <input type="radio" id="answer_1" class="answer_radio" name="answer" value="1">
                            </label>
                            <label onclick="select()" id="second_answer" for="answer_2" class="font-bold answer">
                                Germania
                                <input type="radio" id="answer_2" class="answer_radio" name="answer" value="2">
                            </label>
                            <label onclick="select()" id="third_answer" for="answer_3" class="font-bold answer">
                                Italia
                                <input type="radio" id="answer_3" class="answer_radio" name="answer" value="3">
                            </label>
                        </div>
                        <button class="submit_button self-end font-bold disabled" disabled>Avanti</button>
                    </form>
                @endif
            </div>
        </div>
    </body>

    <script>
        function select(){
            selected_item = document.querySelectorAll('.answer_radio');
            answer_boxes = document.querySelectorAll('.answer');
            answer_boxes.forEach(el => {
                el.classList.remove('selected');
            });
            selected_item.forEach(el => {
                if(el.checked == true){
                    selected_answer = document.querySelector('#' + el.labels[0].id);
                    selected_answer.classList.add('selected');
                    submit_button = document.querySelector('.submit_button');
                    submit_button.disabled = false;
                    submit_button.classList.remove('disabled');
                }
            });
        }
    </script>

</html>
<x-app-layout>


    <x-dashboard-layout>

        <form class="text-left grid grid-cols-1 gap-4 my-5" method="post"
            action="{{route('quizzes.store')}}">

            @csrf
            <span class="grid  grid-cols-[80%] sm:grid-cols-[20%_40%]    ">
                <label for="question">
                    Question
                </label>

                <span class="flex flex-col"><textarea rows="2" class=" rounded-lg" id="question" name="question"
                        type="text"
                        >{{old('question')}}</textarea>

                    @if($errors->has('question'))
                    <span class=" text-red-500">{{$errors->first('question')}}</span>
                    @endif</span>

            </span>
            <span class="grid  grid-cols-[80%] sm:grid-cols-[20%_40%]    ">
                <label for="answer_a">
                    Answer A
                </label>
                <span class="flex flex-col">
                    <textarea rows="2" class=" text-start rounded-lg" id="answer_a" name="answer_a"
                        type="text"
                        value="{{old('answer_a')}}"></textarea>

                    @if($errors->has('answer_a'))
                    <span class=" text-red-500">{{$errors->first('answer_a')}}</span>
                    @endif
                </span>
            </span>

            <span class="grid  grid-cols-[80%] sm:grid-cols-[20%_40%]    ">
                <label for="answer_b">
                    Answer B
                </label>

                <span class="flex flex-col">
                    <textarea rows="2" class="text-start rounded-lg" id="answer_b" name="answer_b"
                        type="text"
                        value="{{old('answer_b')}}"></textarea>

                    @if($errors->has('answer_b'))
                    <span class=" text-red-500">{{$errors->first('answer_b')}}</span>
                    @endif
                </span>


            </span>


            <span class="grid  grid-cols-[80%] sm:grid-cols-[20%_40%]    ">
                <label for="answer_c">
                    Answer C
                </label>
                <span class="flex flex-col">
                    <textarea

                        class="text-start rounded-lg" id="answer_c" name="answer_c"
                        type="text"
                        value="{{old('answer_c')}}"></textarea>

                    @if($errors->has('answer_c'))
                    <span class=" text-red-500">{{$errors->first('answer_c')}}</span>
                    @endif
                </span>
            </span>

            <span class="grid  grid-cols-[80%] sm:grid-cols-[20%_40%]    ">
                <label for="answer_d">
                    Answer D
                </label>
                <span class="flex flex-col ">
                    <textarea rows="2" class="text-start rounded-lg" id="answer_d" name="answer_d"
                        type="text"
                        value="{{old('answer_d')}}"></textarea>

                    @if($errors->has('answer_d'))
                    <span class=" text-red-500">{{$errors->first('answer_d')}}</span>
                    @endif
                </span>
            </span>

            <span class="grid  grid-cols-[80%] sm:grid-cols-[20%_40%]    ">
                <label for="correct_answer">
                    Correct Answer
                </label>
                <select class="rounded-lg" id="correct_answer" name="correct_answer">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>

                @if($errors->has('correct_answer'))
                <span class=" text-red-500">{{$errors->first('correct_answer')}}</span>
                @endif
            </span>
            @php

            @endphp



            <span class="grid  grid-cols-[80%] sm:grid-cols-[20%_40%]  ">
                <label></label>
                <input type="submit" class="cursor-pointer p-3 w-[20%] rounded-lg bg-black
                 text-white  dark:bg-white dark:text-white" value="Create" />

                @if(session('success'))

                <p class="text-green-400">{{session('success')}}</p>

                @endif
            </span>

        </form>


    </x-dashboard-layout>



</x-app-layout>
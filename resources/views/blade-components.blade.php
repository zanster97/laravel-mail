<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h3>Hello!</h3>
    {{-- <x-alert text="This is a test data" style="color: rgb(19, 181, 111)"/> --}}
    {{-- <x-forms.input/>
    <x-forms.form-select/> --}}
    {{-- @php
        $languages = ['Python','JavaScript','PHP'];
    @endphp

    @foreach ($languages as $language )
        <x-alert :text="$language" style="color: rgb(19, 181, 111)"/>
    @endforeach --}}
    {{-- <x-button style="padding: 10px; color:antiquewhite ; background:goldenrod" class="test class"/>
    <x-button style="padding: 10px; color:rgb(98, 83, 63) ; background:rgb(69, 127, 222)" class="test class"/> --}}

    <x-button>
        Click bait!
    </x-button>

    <div class="container py-5">
        <div class="row">

            <x-card title="Analytics">
                <x-slot name="image">
                    <img src="https://picsum.photos/100?1" class="img-fluid rounded-3">
                </x-slot>
                <x-slot name="title">
                    Powerful insights to grow your business.
                </x-slot>
                <x-slot name="slot">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, est? Porro iusto corrupti totam dolore accusamus enim voluptatum, consequuntur, velit quisquam tempora consectetur est eaque, nisi veritatis provident tenetur dolor.
                </x-slot>
            </x-card>

            <x-card title="Security">
                <x-slot name="image">
                    <img src="https://picsum.photos/100?2" class="img-fluid rounded-3">
                </x-slot>
                <x-slot name="title">
                Advanced protection for your data.
                </x-slot>
                <x-slot name="slot">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, est? Porro iusto corrupti totam dolore accusamus enim voluptatum, consequuntur, velit quisquam tempora consectetur est eaque, nisi veritatis provident tenetur dolor.
                </x-slot>
            </x-card>

            <x-card title="Performance">
                <x-slot name="image">
                    <img src="https://picsum.photos/100?3" class="img-fluid rounded-3">
                </x-slot>
                <x-slot name="title">
                Lightning-fast speed and optimization.
                </x-slot>
                <x-slot name="slot">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, est? Porro iusto corrupti totam dolore accusamus enim voluptatum, consequuntur, velit quisquam tempora consectetur est eaque, nisi veritatis provident tenetur dolor.
                </x-slot>
            </x-card>

            <x-card title="Support">
                <x-slot name="image">
                    <img src="https://picsum.photos/100?4" class="img-fluid rounded-3">
                </x-slot>
                <x-slot name="title">
                24/7 assistance whenever you need.
                </x-slot>
                <x-slot name="slot">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, est? Porro iusto corrupti totam dolore accusamus enim voluptatum, consequuntur, velit quisquam tempora consectetur est eaque, nisi veritatis provident tenetur dolor.
                </x-slot>
            </x-card>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

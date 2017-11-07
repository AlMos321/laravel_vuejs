<template>

</template>

<template>
    <div class="container" style="padding-bottom: 40px">
        <h3 style="text-align: center;">Топовые продукты</h3>
        <h4 style="text-align: center;">{{items.name}}</h4>
        <div id="root" style="text-align: center;">
            <input v-model="message">
            <p>The value of the input: {{message}}</p>
            <ul>
                <li v-for="name in names">{{name}}</li>
            </ul>

            <input id="input" type="text">
            <button id="button">Add Name</button>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="product" style="background-image: url('https://img.makeup.com.ua/products_pictures/f/f8/f8ju7u3zm7xj.jpg')"></div>
                <a class="btn btn-primary buy-btn">Купить</a>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product" style="background-image: url('https://img.makeup.com.ua/products_pictures/f/f8/f8ju7u3zm7xj.jpg')"></div>
                <a class="btn btn-primary buy-btn">Купить</a>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product" style="background-image: url('https://img.makeup.com.ua/products_pictures/f/f8/f8ju7u3zm7xj.jpg')"></div>
                <a class="btn btn-primary buy-btn">Купить</a>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="product" style="background-image: url('https://img.makeup.com.ua/products_pictures/f/f8/f8ju7u3zm7xj.jpg')"></div>
                <a class="btn btn-primary buy-btn">Купить</a>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product" style="background-image: url('https://img.makeup.com.ua/products_pictures/f/f8/f8ju7u3zm7xj.jpg')"></div>
                <a class="btn btn-primary buy-btn">Купить</a>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product" style="background-image: url('https://img.makeup.com.ua/products_pictures/f/f8/f8ju7u3zm7xj.jpg')"></div>
                <a class="btn btn-primary buy-btn">Купить</a>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="product" style="background-image: url('https://img.makeup.com.ua/products_pictures/f/f8/f8ju7u3zm7xj.jpg')"></div>
                <a class="btn btn-primary buy-btn">Купить</a>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product" style="background-image: url('https://img.makeup.com.ua/products_pictures/f/f8/f8ju7u3zm7xj.jpg')"></div>
                <a class="btn btn-primary buy-btn">Купить</a>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product" style="background-image: url('https://img.makeup.com.ua/products_pictures/f/f8/f8ju7u3zm7xj.jpg')"></div>
                <a class="btn btn-primary buy-btn">Купить</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                items: {name: "Viktor"},
                message: 'Hello World',
                names: ["Oleg", "Den", "Kord"]
            }
        },
    }

    console.log(document)

    document.querySelector("#button").addEventListener('click', () => {
       let name = document.querySelector('#input');
        data().names.push(name.value);
        name.value = "";
    });





</script>
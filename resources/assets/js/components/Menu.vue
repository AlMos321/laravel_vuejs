<template>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Vuejs test</a>
            </div>
            <ul class="nav navbar-nav">
                <li><router-link :to="{ name: 'DisplayItem' }">Items</router-link></li>
                <li><router-link :to="{ name: 'Login' }">Login</router-link></li>
            </ul>
        </div>
    </nav>
</template>
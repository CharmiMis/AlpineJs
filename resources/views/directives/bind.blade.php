<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpine.js Example</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="parent">
        <div  x-data="{ ImgURl: 'https://documents.iplt20.com/ipl/IPLHeadshot2024/2.png' ,
        show:false,
        inputval:'Hey'
        }">
            <img x-bind:src="ImgURl" x-bind:class="{'hidden': !show}"  alt="Image" class="w-100 h-100">
           <br>
            <input type="text" :value="inputval" :style="{color: 'red'}">
        </div>
    </div>
</body>
</html>

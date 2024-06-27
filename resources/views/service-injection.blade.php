<html>

<body>
    @inject('service', 'App\Services\HelloService')
    <h1>{{ $service->sayHello($name) }}</h1>
</body>

</html>

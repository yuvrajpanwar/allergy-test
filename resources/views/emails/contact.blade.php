<!DOCTYPE html>
<html>
<body>
    <div>
        <h3>
            <strong style="color: green"> {{$data['name']}} </strong> just submitted your <strong> Allergy Test Lead  </strong> form.
        </h3>
    </div>
    <div class="container">
        <h2>Message Details:</h2>
        <p><strong>Name:</strong> {{ strip_tags($data['name']) }}</p>
        <p><strong>Phone Number:</strong> {{ $data['phone_number'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Collection Point:</strong> {{ $data['location'] }}</p>
        <p><strong>Message:</strong></p>
        <p>{{ strip_tags($data['message']) }}</p>
    </div>
    
</body>
</html>

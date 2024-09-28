<!DOCTYPE html>
<html>
<body>
    <div>
        <h3>
            <strong style="color: green"> {{$data['name22']}} </strong> just submitted your <strong> Allergy Test Lead  </strong> form.
        </h3>
    </div>
    <div class="container">
        <p>You have received a new consultation request:</p>
        <p><strong>Name:</strong> {{ strip_tags($data['name22']) }}</p>
        <ul>
            <li><strong>Name:</strong> {{ $data['name22'] }}</li>
            <li><strong>Phone Number:</strong> {{ $data['phone_number22'] }}</li>
            <li><strong>Location:</strong> {{ $data['location22'] }}</li>
        </ul>
        <p>Please follow up with the client between 8 am and 8 pm.</p>
    </div>
</body>
</html>
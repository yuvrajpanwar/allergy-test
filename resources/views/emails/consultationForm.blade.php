<!DOCTYPE html>
<html>
<body>
    <div>
        <h3>
            <strong style="color: green"> {{ $data['name'] }} </strong> just submitted your <strong> Allergy Test Lead
            </strong> form.
        </h3>
    </div>
    <div class="container">
        <p>You have received a new consultation request:</p>
        <ul>
            <li><strong>Name:</strong> {{ $data['name'] }}</li>
            <li><strong>Phone Number:</strong> {{ $data['phone_number'] }}</li>
            <li><strong>Location:</strong> {{ $data['location'] }}</li>
        </ul>
        <p>Please follow up with the client between 8 am and 8 pm.</p>
    </div>
</body>
</html>

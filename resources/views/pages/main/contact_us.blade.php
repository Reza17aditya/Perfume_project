@extends('layout.main')
@section('container')   
    <section id="contact-us" class="container custom-margin-top">
        <h2>Contact Us</h2>
        <p>Customer Service</p>
        <p>Monday to Friday 9am - 9pm EST, Saturday 10am - 9pm EST : +62 123 456 789</p>
        <form>
            <div class="row custom-spacing">
                <div class="custom-column">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="First Name">
                </div>
                <div class="custom-column">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                </div>
            </div>
            <div class="custom-spacing">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="custom-spacing">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="123-456-7890">
            </div>
            <div class="custom-spacing">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Your message..."></textarea>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
        <p class="terms">
            By sending your message, you agree to accept the General Terms and Conditions of Use and that your data will be processed in compliance with the Privacy Policy.
        </p>
    </section>
@endsection
@extends("layouts.app")

@section("welcome")

    <div>
        <video autoplay muted loop id="myVideo">
            <source src="/video/mountains.mp4" type="video/mp4">
    </div>
    <div class="video-front-content">
        <h1>Connect to create a new and better world</h1>
        <p>Lets create a place where privacy is top priority and the comfort for user is our focus. Build an environment for user-friendly and secure world where everyone can rely on us.
            <br/>Login and join us to make a community to grow together.
        </p>
    </div>


    <div class="image-1">
        <p> Together We Can Define A New World </p>
        <article>
            A new interface lightens up new ideas and creativity. Together we can grow steadily and quickly. The more we unite and help each other we can grow more advanced and meaningful interfaces. A new idea is a new creativity and a path to a better way. Growing slow but steadily is the concept i believe on. Building a interface that is user-friendly and easy to use and operate is th target that attracts more user to be more interactive and willing to stay tuned with us. Dealing errors, bugs, and problems together can make us move faster and easily forward.<br/>
             -- One Step Ahead --
        </article>
        <div class="image-content">
            <img src="/img/466604321.jpg" alt="together">
            <img src="/img/video-chatting-apps.jpg" alt="together">
            <img src="/img/kendall-jenner-on-the-phone-1507654167-list-handheld-0.jpg" alt="together">
        </div>
    </div>

    <section>
    <div class="profile-content">
        <img src="/img/prashan.jpg" alt="profile">
        <div class="image-text">
            <h3>Prashan Prajapati</h3>
            <p>A developer having a will to develop a world where privacy is never a doubt.</p>
            <div class="form">
                <h1>Contact Me</h1>
                <form action="{{}}" method="POST">
                    @csrf
                    <label for="name">Your Name:</label>
                    <input type="text" name="name" id="name" required>

                    <label for="email">Your E-Mail:</label>
                    <input type="text" name="email" id="email" required>

                    <label for="feed">Feedback/Complaint:</label>
                    <input type="text" name="feed" id="feed">
                    <br/>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>

    </div>
    </section>
@endsection

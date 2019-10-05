@extends('layouts.app')
@section('content')
<div class="Main-body">
  
  <div class="firstline">Goal Tracking made easier
  </div>
  <div class="secondline">Get organised and track anything you 
    want to build with the perfect routine 
  </div>
  <div class="actionbutton">
   
      <a href="{{ url('/login') }}" class="btn btn-md sign-up-btn btn-warning">start Now</a>
      
  </div>
</div>

{{--  Enter your code @Vickyella  --}}
<style>

.main-content {
    color: black;
    font-size: 1em;
}
section {
    display: block;
}

.thesaas-sections-split .section {
  margin: 30px 50px 100px;
  box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
  border: 1px solid #ebebeb;
}

.thesaas-sections-split .section-info {
  text-align: center;
  text-transform: uppercase;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 1px;
  padding-top: 60px;
}

@media (max-width: 768px) {

  .thesaas-sections-split .section {
    margin: 30px 0 100px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  }

}
.container, .container-fluid {
    margin-left: auto;
    margin-right: auto;
    padding-right: 15px;
    padding-left: 15px;
    position: relative;
}
section div.section-title {
    margin-bottom: 60px;
    margin-top: 0px;
    padding: 10px;
    height: 100px;
    background-image: url(https://www.goalsontrack.com/assets/css_banner_ribbon-d4d056efe75b3365f0b549f3d6da866a.png);
    background-size: 100% 100%;
}




main {
    display: block;
}

.book-thumbnail{height:150px !important}.book-wrapper{padding:0 20%}
@media (max-width: 480px){.input-group{display:block;width:100% !important}.input-group .input-group-addon{display:none}.input-group .form-control,.input-group .input-group-btn{display:block;width:100% !important;margin:20px auto;text-align:center}}header.header{background-image:url("https://www.goalsontrack.com/assets/header_background-d3f89f0b66bdc8c489fb25565087530e.png")}.nav-hero .nav-link{font-size:12px;font-weight:400}div.container .quote-text{color:#888;font-family:Georgia, serif;font-size:32px;font-weight:normal;font-style:italic;line-height:1.5em;text-align:center;width:94%;padding:3%;margin:40px auto;border-top:1px solid gray;border-bottom:1px solid gray}h1.title-text,h2.title-text{color:#F77500 !important}.easy-text{font-size:18px !important}section div.section-title{margin-bottom:60px;margin-top:0px;padding:10px;height:100px;background-image:url(https://www.goalsontrack.com/assets/css_banner_ribbon-d4d056efe75b3365f0b549f3d6da866a.png);background-size:100% 100%}section div.section-title h2{text-align:center;margin-top:0px;color:white}section h3{color:#F77500 !important}.order-form{border:10px solid #cccccc;padding:30px 30px}.order-form h2{font-size:36px;color:#F77500;text-shadow:1px 1px #666}.order-form h3.green{color:green !important}.order-form div.vertical-divider{border-right:2px solid lightgray}.quote-testimonial{color:#888;font-family:Georgia, serif;font-size:20px;font-weight:normal;font-style:italic;line-height:1.5em;text-align:center;padding:3%;margin:10px auto;background-image:url(https://www.goalsontrack.com/assets/css_paper_texture-f19343b359ae8fc746cc404840740cdd.png);background-size:100% 100%}.quoteBox-big{padding:10px}.resource-image{width:180px;margin-top:30px}.error{color:red}span.error{font-size:small}select.auto-width{width:auto;display:inline}.hidden{display:none}body{color:black;font-size:1em}



</style>

<main class="mt-3">
      <section class="section">
        <div class="container">
          <div class="section-title">
            <h2>Why Set Goals?</h2>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <img alt="Overview goal setting road" class="img-fluid" src="https://www.goalsontrack.com/assets/overview_goal_setting_road-7e1dbb3c8c1e53a87febe0fbc8133efa.jpg">
            </div>
            <div class="col-lg-8 easy-text">
              <p>The research is clear: <strong>People who set goals are more successful.</strong></p>
              <p>Top-level athletes, successful businesspeople and achievers in all fields all set goals. Setting goals gives you long-term vision and short-term motivation </p> 
              <p>We are humans and we can think in future terms. Animals don't set goals, because they can't. We can certainly choose to not set goals, but then we would be wasting a true gift given only to us humans.</p>
              <p>If you ever dream about a better future and want to achieve success, here are some great reasons why you want to set goals.</p>
            </div>
          </div>

          <div class="col-12 text-center quote-text">
              “You need a plan to build a house. To build a life, it is even more important to have a plan or goal.” – Zig Ziglar
          </div>
          <div class="row">
            <div class="col-lg-8 easy-text">
              <h3>Take Control of your Life</h3>
              <p> people today are sleepwalking through life. Even though they work hard, they don’t feel like they are getting what they want. That’s because they don’t have a direction of where they want to go, what they want to achieve. Students graduate and they’re not sure what to do with their life; adults work for years and are shocked when they reach their 30s/40s and they don’t know what to do next.</p>
                
              <h3>Gain focus and live life to the fullest</h3>
              <p>No matter how long you live, you only have limited time in this world. By setting goals and deciding what’s important and what isn’t, you can focus your life on things that are truly valuable. You will make the most out of your time and have the best chance at living a full life.</p>
                
              <h3>Key trait of all successful people</h3>
              <p>Strong goal setting and action taking skills are one of the few key secrets shared among all high achievers, such as Bill Gates, Steve Jobs, Oprah Winfrey, J.K. Rowling and many others. Not everyone will be successful by just setting a goal, but without goals, no one can achieve great success in anything.</p>

              <p>If you don’t believe in setting goals, then you probably have done it in the wrong way. Here are a few common mistakes people tend to make in goal setting and how avoiding these mistakes you will realize the true power of goal setting in making dramatic changes in your life.</p>
            </div>
            <div class="col-lg-4">
              <img alt="Overview happy clouds" class="img-fluid" src="https://www.goalsontrack.com/assets/overview_happy_clouds-43c4866eb9faf7ceb4aa256c3217e4ca.jpg">
            </div>
          </div>
          <div class="col-12 text-center quote-text">
            If you don't design your own life plan, chances are you'll fall into someone else's plan. And guess what they have planned for you? Not much. - Jim Rohn
          </div>
        </div>
      </section>
     
     <section class="section">
        <div class="container">
          <div class="section-title">
            <h2>What Most People Do Wrong With Goals</h2>
          </div>
          <div class="row easy-text">
            <div class="col-lg-8">
              <ol class="alpha">
                  <li><strong>Set the wrong goals</strong> – We fail more in setting the wrong goals than reaching the right ones. Many of our goals are un-SMART, meaning they are not specific, not measurable, unachievable, unrealistic or not time-bound. Our goals may not be compelling enough, un-motivating or too beyond our control. It’s not goal setting that we should give up on, but rather the wrong ways we set goals.</li>
                    <li><strong>Poor planning, vague and non-actionable or no plans at all</strong> – Setting a goal isn’t very hard, but what’s hard is coming up with plans that work. Oftentimes we adopt plans that might work for others but not necessarily for us. Because everyone is different so we need to create plans that suit us and reach goals in our own way.</li>
                    <li><strong>Lack of follow-up and can’t stick</strong> – Most of our failings can be attributed to lack of consistent and persistent action taken for as long as it is required. The bigger the goal, the higher the demand will be for consistency and perseverance. We often underestimate obstacles and efforts required, but overestimate our willpower and motivation to follow through.</li>
              </ol>
            </div>
            <div class="col-lg-4">
              <img alt="Overview ladder" class="img-fluid" src="https://www.goalsontrack.com/assets/overview_ladder-a04d30a1078f7a0bd821ad34240f31d2.jpg">
            </div>
          </div>
          <div class="col-12 easy-text">
            <p>It's not easy to avoid making these mistakes, but that doesn’t mean there is nothing we can do to increase our chances. Every mistake or failure has a hidden solution and once we recover and apply it, we will be able to achieve any goal we want.</p>
            <p>Next you will learn the seven scientifically researched and proven strategies that you can use to not only avoid making the most common mistakes in achieving goals, but also discover new ways and build your personal power to realize your dreams.</p>
          </div>
        </div>
      </section>
     
    
     <section class="section">
        <div class="container">
          <div class="section-title">
            <h2>7 Scientifically Proven Strategies for Achieving Goals</h2>
          </div>
          <div class="row easy-text">
            <div class="col-lg-3">
              <h3>&nbsp;</h3>
              <img alt="Overview sales write" class="img-fluid"  src="https://www.goalsontrack.com/assets/overview_sales_write-854ca8c1351e9018cffb1cf73cc56d98.jpg">
            </div>
            <div class="col-lg-9">
              <h3>1. Write it down</h3>
              <p>According to <a href="http://www.dominican.edu/academics/ahss/undergraduate-programs/psych/faculty/fulltime/gailmatthews/researchsummary2.pdf" title="Goal Research Summary" target="new">a study done by Dr. Gail Matthews</a>, a psychology professor at Dominican University in California, <b>you are 42% more likely to achieve your goals just by writing them down</b>. Or interpret it this way: if you set two goals that you often failed in the past, start writing them down this time. With everything else being equal, same amount of effort, motivation, discipline, etc., you will most likely achieve at least one of the two. To make it work even better, write it down repeatedly.</p>
            </div>
          </div>
          
          <hr>
          <div class="row easy-text">
            <div class="col-lg-3">
              <h3>&nbsp;</h3>
              <img alt="Overview sales plan" class="img-fluid"  src="https://www.goalsontrack.com/assets/overview_sales_plan-932ede8a7b15ec31551713bc585a1499.jpg">
            </div>
            <div class="col-lg-9">
              <h3>2. Create a concrete plan</h3>
              <p><a href="http://onlinelibrary.wiley.com/doi/10.1002/(SICI)1099-0992(199908/09)29:5/6%3C591::AID-EJSP948%3E3.0.CO;2-H/abstract" target="new">A study in the British Journal of Health Psychology</a> found that 91% of people who planned their intention to exercise by writing down <b>when and where</b> they would exercise each week ended up following through, while only 35% achieved the same result relying on just motivation. Many similar studies have come to the same conclusion: if we clearly state when and where we are going to take the action, we are much more likely to stick to our goal.</p>
            </div>
          </div>
          
          <hr>
          <div class="row easy-text">
            <div class="col-lg-3">
              <h3>&nbsp;</h3>
              <img alt="Overview sales action" class="img-fluid" src="https://www.goalsontrack.com/assets/overview_sales_action-fc8fd8c868eac7d0a3dca4ff7259f53f.jpg">
            </div>
            <div class="col-lg-9">
              <h3>3. Track your time and action</h3>
              <p>According to <a href="https://hbr.org/2011/05/the-power-of-small-wins" title="Power of Small Wins" target="new">a study published on Harvard Business Review</a>, the most significant factor that influences our motivation to reach goals is a sense of seeing the progress. If you look back on any accomplished goal, except for external factors, your achievement is simply the sum of total time you spent and action you took toward reaching that goal. Track your time and your action would be the same as tracking your progress, even though you may not feel you are making real progress. This simple shift in mindset will help you stick to the process and persevere until your goal is accomplished.</p>
            </div>
          </div>
          
          <hr>
          <div class="row easy-text">
            <div class="col-lg-3">
              <h3>&nbsp;</h3>
              <img alt="Overview sales accountable"  class="img-fluid"  src="https://www.goalsontrack.com/assets/overview_sales_accountable-b68db2a435d61789df2450f3fe080e63.jpg">
            </div>
            <div class="col-lg-9">
              <h3>4. Hold yourself accountable</h3>
              <p>In <a href="http://www.dominican.edu/academics/ahss/undergraduate-programs/psych/faculty/fulltime/gailmatthews/researchsummary2.pdf" title="Goal Research Summary" target="new">Dr. Gail Matthews’ study</a>, people who have a supportive partner to report progress and hold them accountable score the highest on the overall goal achievement chart. No matter what goals you want to achieve, having an accountability partner or joining in an accountability group or program can help you accelerate your performance, keep you engaged and responsible for your actions, and provide you with valuable feedback and constructive advice.</p>
            </div>
          </div>
          
          <hr>
          <div class="row easy-text">
            <div class="col-lg-3">
              <h3>&nbsp;</h3>
              <img alt="Overview sales habits" class="img-fluid"  src="https://www.goalsontrack.com/assets/overview_sales_habits-1051beb285b2106c611a308165eea9e9.jpg">
            </div>
            <div class="col-lg-9">
              <h3>5. Build habits</h3>
              <p>Citing many scientific studies, the popular book <a href="http://charlesduhigg.com/the-power-of-habit/" target="new">The Power of Habits</a> teaches us how habits form our behavior and achieve success both in life and business. When we turn our goals into habits, we put our accomplishment on autopilot. Once the habits are firmly established, we don’t really have to focus on them much. Whatever goal that has transformed into habits will simply achieve itself on its own. How wonderful is that!</p>
              <p>You are more likely to achieve worthwhile goals if you have good habits. Illustrating this, <a href="http://www.ncbi.nlm.nih.gov/pubmed/17907866" target="new">a 2007 study</a> suggested that we're not motivated by goals alone. In fact, once we've decided upon a goal, we're more motivated – on a day-by-day basis – by the habits that we have set up to reach it, than by the goal itself.</p>
              <p>We're also motivated by reflecting on our progress towards our goals. A 2010 study reinforced this: here, researchers monitored people who were trying to form better eating habits. They found that those who were encouraged to reflect on how they were doing, and who adjusted their habits accordingly, were ultimately more successful.</p>
            </div>
          </div>
          
          <hr>
          <div class="row easy-text">
            <div class="col-lg-3">
              <h3>&nbsp;</h3>
              <img alt="Overview sales journal" class="img-fluid"  src="https://www.goalsontrack.com/assets/overview_sales_journal-028aea4ef737f41c74f66d66bace5423.jpg">
            </div>
            <div class="col-lg-9">
              <h3>6. Keep goal journal</h3>
              <p>A <a href="https://ed.stanford.edu/sites/default/files/roles.pdf" target="new">study published in the journal Psychological Science</a> showed that women who wrote about their values in a journal every night lost on average 3.4 pounds in four months while women who didn’t journal gained weight. Keeping a journal for your goals not only helps you reach them, but also provides many benefits such as reducing stress, solving problems, gaining insights and even increasing memory and happiness.</p>
            </div>
          </div>
          
          <hr>
          <div class="row easy-text">
            <div class="col-lg-3">
              <h3>&nbsp;</h3>
              <img alt="Overview sales visualize" class="img-fluid"  src="https://www.goalsontrack.com/assets/overview_sales_visualize-67f5d1730e7e08d304ceaef829e53290.jpg">
            </div>
            <div class="col-lg-9">
              <h3>7. Visualize both outcome and process</h3>
              <p>According to <a href="https://www.psychologytoday.com/blog/flourish/200912/seeing-is-believing-the-power-visualization" target="new">research in brain patterns</a>, visualization helps with your goal attainment. It works because neurons in your brains interpret imagery as equivalent to a real-life action, and then primes your body to act in a way consistent to what you want to achieve. By imagining the detailed mental picture of your desired outcome, and visualize each of the action steps necessary to reach that outcome, your brain will help you make positive and behavioral change that is needed to accomplish your goals.</p>
            </div>
          </div>

          <div class="col-12 quote-text">
            <h3>Wouldn't it be great if there is a system that integrates all of these proven goal strategies in a holistic approach you can use to achieve your goals?</h3>
          </div>
        </div>
      </section>
     
     
     
     
    </main> 
    <!-- END Main container -->
    
 

{{--  End your code @Vickyella  --}}

{{--  Enter your code @Vickyella  --}}


{{--  End your code @Vickyella  --}}

{{--  Enter your code @Valar  --}}
<style>
  .newsletter {
padding: 80px 0;
background: #f2f2f2;
}

.newsletter .content {
max-width: 800px;
margin: 0 auto;
text-align: center;
position: relative;
z-index: 2; }
.newsletter .content h2 {
color: #243c4f;
margin-bottom: 40px; }
.newsletter .content .form-control {
height: 50px;
border-color: #ffffff;
border-radius:0;
}
.newsletter .content.form-control:focus {
box-shadow: none;
border: 2px solid #243c4f;
}
.newsletter .content .btn {
min-height: 50px; 
border-radius:0;
background: #243c4f;
color: #fff;
font-weight:600;
}

</style>
<section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <form>
                            <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your email">
                                <span class="input-group-btn">
                                    <button class="btn" type="submit">Subscribe Now</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--  End your code @Valar  --}}



@endsection
    
      

@section('footer')
    <div class="footer">
    <p>© 2019 | Team Eubouleus</p>

</div>

=======
  </div>

@endsection
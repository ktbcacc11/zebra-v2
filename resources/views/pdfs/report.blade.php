<?php

use App\Models\WPUsers;
use App\Models\BrainScores;
use App\Models\SkillBrainScores;
use App\Models\QuestionAnswerMain;
use App\Models\SkillTestAnswersMain;

$attempt = QuestionAnswerMain::where("user_id", session('user_id'))->where('status', 'complete')->first();
$introvert_extrovert = WPUsers::where('user_id', session('user_id'))->value('introverted_extroverted');
$brain_score = BrainScores::where("answer_main_id", $attempt->id)->first();

$brain_profile_id = WPUsers::where("user_id", session('user_id'))->value('brain_profile_id');
$dob = session('user_dob');
$age = \Carbon\Carbon::parse($dob)->age;


$skill_brain_profile_id = WPUsers::where("user_id", session('user_id'))->value('skill_brain_profile_id');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        @page {
            margin: 60px 25px;
        }

        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
        }

        p {
            line-height: 1.5;
        }

        td,
        th {
            padding: 5px;
        }

        .report-header1 {
            font-size: 28px;
            font-weight: 600;
        }

        .report-header2 {
            font-size: 24px;
            font-weight: 600;
        }

        .report-header3 {
            font-size: 20px;
            font-weight: 600;
        }

        .text-center {
            text-align: center;
        }

        .logo {
            position: fixed;
            top: -45px;
            left: 0;
            right: 0;
            height: 25px;
            text-align: center;
            font-size: 14px;
            position: fixed;
            width: 150px;
        }

        .mb-0 {
            margin-bottom: 0px !important;
        }

        .box-data {
            border: 2px solid #6c6859;
            border-radius: 15%;
            padding: 20px;

        }

        .box-title {
            font-size: 16px;
            font-weight: 800;
            margin-bottom: 0px !important;
        }

        .box-number {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 0px !important;
        }

        .body-text {
            font-size: 16px;
            font-weight: 400;
            color: #000000b8;
        }
    </style>
</head>

<body>
    <img src="{{ public_path('assets/images/zebranewlogo.png') }}" class="logo">
    <div style="padding-bottom:25px;padding-left:25px;padding-right:25px;">
        <h1 class="report-header1 text-center" style="margin-bottom:25px;">Your brain Assessment result </h1>
        <table style="width:100%;border: none;">
            <tr style="vertical-align:middle;">
                <td style="width:50%;border: none;text-align:left;">
                    <img src="{{ public_path('assets/images/brain-cartoon.png') }}" style="width:100%">
                </td>
                <td style="width:50%;border: none;text-align:left;">
                    <h1 class="report-header2" style="margin-bottom:15px;">Basic Brain Report</h1>
                    <table style="width:100%;border: none;">
                        <tr style="vertical-align:middle;">
                            <td style="width:50%;border: none;text-align:left;">
                                <div class="box-data" style="background-color: #f6c94c; color: black;">
                                    <p class="mb-0 text-center box-title" style="color: black;">
                                        Candid
                                    </p>
                                    <h3 class="mb-0 text-center box-number" style="color: black;">
                                        {{$brain_score->l1_score}}%
                                    </h3>
                                </div>
                            </td>
                            <td style="width:50%;border: none;text-align:left;">
                                <div class="box-data" style="background-color: #f1935d; color: black;">
                                    <p class="mb-0 text-center box-title" style="color: black;">
                                        Fastidious
                                    </p>
                                    <h3 class="mb-0 text-center box-number" style="color: black;">
                                        {{$brain_score->l2_score}}%
                                    </h3>
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align:middle;">
                            <td style="width:50%;border: none;text-align:left;">
                                <div class="box-data" style="background-color: #9ae4e3; color: black;">
                                    <p class="mb-0 text-center box-title" style="color: black;">
                                        Maverick
                                    </p>
                                    <h3 class="mb-0 text-center box-number" style="color: black;">
                                        {{$brain_score->r1_score}}%
                                    </h3>
                                </div>
                            </td>
                            <td style="width:50%;border: none;text-align:left;">
                                <div class="box-data" style="background-color: #84d6a5; color: black;">
                                    <p class="mb-0 text-center box-title" style="color: black;">
                                        Affable
                                    </p>
                                    <h3 class="mb-0 text-center box-number" style="color: black;">
                                        {{$brain_score->r2_score}}%
                                    </h3>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <?php
        if ($brain_profile_id == 1):
            if ($age >= 12 && $age <= 14) {
                //Age 12-14 content here  
            }
            if ($age >= 15 && $age <= 18) {
                //Age 15-18 content here    
            }
            if ($age > 18) {
                //Adult content here    
            } ?>

            <p class="body-text">
                Your brain is highly fact-oriented, with a natural inclination to dive deep into problems. You
                tend to be direct and analytical, always seeking certainty before taking action. You thoroughly
                research, calculate, and evaluate every situation, weighing the pros and cons carefully.
                Constantly questioning and probing for clarity is second nature to you. This makes you
                excellent at problem-solving and strategizing.<br><br>
                Your strength lies in your logical, objective approach, and you often cut through complexity by
                sticking to the facts. While others may get lost in emotions or subjective views, you focus on
                what can be proven and understood through reason. People rely on you for your candid
                insights, no-nonsense attitude, and the ability to deliver grounded solutions.
            </p>
            <table style="width:100%;border: none;">
                <tr style="vertical-align:middle;">
                    <td style="width:50%;border: none;text-align:left;">
                        <img src="{{ public_path('assets/images/growth.png') }}" style="width:100%">
                    </td>
                    <td style="width:50%;border: none;text-align:left;">
                        <h1 class="report-header2" style="margin-bottom:15px;">Your Indices for Future Growth</h1>
                        <p class="body-text ">
                            Understanding and evaluating various indices such
                            as Leadership, Creativity, GIG Potential,
                            Entrepreneurship, Team Collaboration Index, and 21stCentury Agility Index can provide valuable insights
                            into different aspects of your personal and
                            professional development. These indices measure
                            distinct traits and capabilities that are essential for
                            success in today's dynamic environment.
                        </p>
                    </td>
                </tr>
            </table>


            <h1 class="report-header2" style="margin-bottom:25px;">Let’s check your future opportunities</h1>
            <h1 class="report-header3" style="margin-bottom:10px;">Leadership - Low</h1>
            <p class="body-text ">
                Your natural analytical focus may cause you to prefer working independently, and you might
                not always feel comfortable stepping into leadership roles. Developing your ability to inspire
                and guide others can elevate your impact, especially in team environments.
            </p>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Creativity - Low</h1>
            <p class="body-text ">
                While you excel at logical thinking, you might struggle to think outside the box or come up with unconventional solutions. Cultivating creativity could expand your problem-solving toolkit and open new pathways to innovation.
            </p>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">GIG Potential - Low</h1>
            <p class="body-text ">
                Adapting to highly dynamic, growth-oriented environments may feel challenging, as you prefer structure and clarity. Building your tolerance for uncertainty and innovation will help you thrive in today’s fast-paced world.
            </p>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Entrepreneurship - Low</h1>
            <p class="body-text ">
                You may prefer stability over risk-taking, which can limit entrepreneurial ventures. Strengthening your ability to identify opportunities and take calculated risks can unlock new avenues for growth.
            </p>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Team Collaboration Index - Low</h1>
            <p class="body-text ">
                While you are excellent at individual problem-solving, working with others may present challenges. Improving communication and collaboration skills will enable you to work more effectively within teams.
            </p>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">21st-Century Agility Index - Low</h1>
            <p class="body-text ">
                Flexibility and adaptability to change can be areas for growth. Learning to embrace new technologies and remain open to continuous learning in a rapidly evolving environment will enhance your professional agility
            </p>
            <h1 class="report-header2" style="margin-bottom:25px;margin-top:50px;">Your Brain Dominance and Thinking Preferences</h1>
            @include('pdfs.report-dimension-content')
            <h1 class="report-header2" style="margin-bottom:25px;margin-top:50px;">Learn More About You</h1>
            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Advanced Brain Report</h1>
            <ul>
                <li class="body-text "><b>Characteristics :</b>Practical individuals excel in understanding and supporting others. They are compassionate and emotionally intelligent.</li>
                <li class="body-text "><b>Outcomes :</b>This dimension is linked to strong interpersonal skills and success in roles that require teamwork and leadership.</li>
                <li class="body-text "><b>Relationships :</b> Empathetic individuals prioritize emotional connections and seek partners who value mutual support and understanding.</li>
                <li class="body-text "><b>LifeChoices :</b>They often choose careers in education, counseling, or social work.</li>
                <li class="body-text "><b>Hands-On Skills :</b>Proficiency in practical tasks and applying theoretical knowledge to real-life situations.</li>
                <li class="body-text "><b>Functional Problem Solving :</b>Ability to identify and implement solutions that work effectively in real-world contexts.</li>
                <li class="body-text "><b>Common Sense Applications :</b>Use of practical wisdom in everyday decision-making.</li>
                <li class="body-text "><b>Task Management :</b>Skilled at organizing and executing tasks efficiently.</li>
                <li class="body-text "><b>Process Improvement :</b>Ability to analyze and improve processes for better efficiency.</li>
                <li class="body-text "><b>Technical Proficiency :</b>Skilled in using tools and technology effectively for practical tasks.</li>
                <li class="body-text "><b>Sustainability Focus :</b> Awareness of sustainable practices in problem-solving and project execution.</li>
                <li class="body-text "><b>Work Ethic :</b>Strong commitment to completing tasks diligently and responsibly.</li>
                <li class="body-text "><b>User-Centric Design :</b> Ability to create solutions that prioritize user needs and experiences.</li>
                <li class="body-text "><b>Collaboration in Practice :</b> Effective teamwork skills, focusing on achieving practical outcomes collectively.</li>
            </ul>
            <?php
            if ($age >= 12 && $age <= 14) { ?>
                <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Sports and other extracurricular activities naturally preferred</h1>
                <p class="body-text ">
                    Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                    <br><br>
                    Here’s a breakdown of sports and extracurricular activities that align with your strengths:
                </p>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">1. Individual Sports</h1>
                <p class="body-text ">
                    Individual sports allow you to focus on personal performance, set measurable goals, and analyze your own progress over time. These sports typically have a high degree of strategy and technical precision.
                </p>
                <ul>
                    <li class="body-text "><b>Recommended Sports:</b>
                        <ul>
                            <li class="body-text">
                                <b>Tennis:</b> Involves strategic shot placement, calculating angles, and anticipating opponents’ moves.
                            </li>
                            <li class="body-text">
                                <b>Golf:</b> Requires focus, precision, and careful planning for each shot.
                            </li>
                            <li class="body-text">
                                <b>Swimming:</b> Offers individual goal setting and improvement tracking, along with structured technique refinement.
                            </li>
                            <li class="body-text">
                                <b>Fencing:</b> Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.
                            </li>
                            <li class="body-text">
                                <b>Archery:</b> Focuses on precision, control, and mental discipline—perfect for someone who values accuracy.
                            </li>
                        </ul>
                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">2. Strategic Team Sports
                </h1>
                <p class="body-text ">
                    Team sports that rely on strategy, tactics, and careful planning may also appeal to your analytical mindset. These sports require coordination, teamwork, and a tactical approach to outmaneuver opponents.
                </p>
                <ul>
                    <li class="body-text "><b>Recommended Sports:</b>
                        <ul>
                            <li class="body-text">
                                <b>Soccer (Football):</b> Involves complex team strategies, positional awareness, and tactical decision-making.
                            </li>
                            <li class="body-text">
                                <b>Basketball:</b> Requires quick calculations of positioning, teamwork, and reading the game in real-time.
                            </li>
                            <li class="body-text">
                                <b>Cricket:</b> A game of strategy where players must carefully consider your moves, both as you and as part of a team.
                            </li>
                            <li class="body-text">
                                <b>Baseball:</b> Involves both individual performance and strategic thinking regarding team tactics, player positioning, and game management.
                            </li>
                        </ul>
                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">3. Mind Sports
                </h1>
                <p class="body-text ">
                    Mind sports are highly strategic and involve deep thinking, planning, and analysis—perfect for your logical and candid nature. These activities allow you to engage in mental competition, enhancing your ability to process information and apply it quickly.
                </p>
                <ul>
                    <li class="body-text "><b>Recommended Activities:</b>
                        <ul>
                            <li class="body-text">
                                <b>Chess:</b> A game of pure strategy, requiring forethought, planning, and the ability to think several moves ahead.
                            </li>
                            <li class="body-text">
                                <b>Debate Team:</b> Enhances your ability to logically argue, analyze information, and present clear, candid points in a structured format.
                            </li>
                            <li class="body-text">
                                <b>Mathematics Competitions: </b> Involves solving complex problems under time constraints, an ideal challenge for your analytical mind.
                            </li>
                            <li class="body-text">
                                <b>Quiz Bowl/Trivia:</b> Offers the opportunity to apply your knowledge in a fast-paced, competitive setting that rewards factual recall and logical reasoning.
                            </li>
                        </ul>
                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">4. STEM-Related Extracurriculars
                </h1>
                <p class="body-text ">
                    You are likely to enjoy and excel in extracurricular activities that focus on science, technology, engineering, and mathematics (STEM). These activities align with your strength in logical problem-solving and your ability to engage with complex systems.
                </p>
                <ul>
                    <li class="body-text "><b>Recommended Activities:</b>
                        <ul>
                            <li class="body-text">
                                <b>Robotics Club:</b> Offers hands-on experience in designing, building, and programming robots, combining analytical thinking with creativity.
                            </li>
                            <li class="body-text">
                                <b>Coding/Programming Clubs:</b> Involves logical problem-solving, algorithm development, and creating structured solutions to technical challenges.
                            </li>
                            <li class="body-text">
                                <b>Science Olympiad:</b> A competition focused on applying scientific knowledge to solve problems, requiring critical thinking and teamwork.
                            </li>
                            <li class="body-text">
                                <b>Math Club:</b> A chance to engage with complex mathematical theories, problem-solving, and logical puzzles.
                            </li>
                            <li class="body-text">
                                <b>Engineering Projects:</b> Allows you to apply mathematical and scientific principles to create practical solutions, using analytical skills in real-world scenarios.
                            </li>
                        </ul>
                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Benefits of These Activities for You:
                </h1>
                <ul>
                    <li class="body-text "><b>Structured Learning and Growth:</b> Most of these activities allow for clear goal setting and measurable progress, which aligns with your analytical approach to life.
                    </li>
                    <li class="body-text "><b>Strategic Thinking: </b> Activities like chess, robotics, and debate emphasize planning, critical thinking, and decision-making, areas where you naturally excel.
                    </li>
                    <li class="body-text "><b>Focused Improvement:</b> Individual sports and STEM extracurriculars let you focus on honing your skills and tracking improvement over time, feeding your need for structure and results-oriented progress.
                    </li>
                    <li class="body-text "><b>Tactical and Mental Engagement:</b> Mind sports and strategic team games engage your ability to think several steps ahead, providing mental stimulation that complements your brain’s natural inclination toward deep analysis.
                    </li>
                </ul>
                <p class="body-text">
                    By participating in these sports and activities, you'll be able to leverage your <b>Logical Strategist</b> mindset while also developing additional skills such as creativity, teamwork, and leadership.
                </p>
            <?php }
            ?>
            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Preferred studying and learning styles</h1>
            <p class="body-text ">
                As someone with an <b>Analytical Brain</b>, your approach to studying and learning is highly structured, logical, and detail-oriented.
                <br><br>
                Here’s a breakdown of your preferred learning styles based on your brain’s strengths:
            </p>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">1. Logical/Mathematical Learning Style</h1>
            <p class="body-text ">
                You thrive in environments where you can apply reasoning, logic, and analysis. Learning through patterns, data, and cause-effect relationships is your natural mode of absorbing information.
            </p>
            <ul>
                <li class="body-text "><b>Preferred Study Techniques:</b>
                    <ul>
                        <li class="body-text">
                            Breaking down complex concepts into logical sequences
                        </li>
                        <li class="body-text">
                            Creating flowcharts, diagrams, or mind maps to understand relationships between ideas
                        </li>
                        <li class="body-text">
                            Using formulas, models, and algorithms to solve problems
                        </li>
                    </ul>
                </li>
                <li class="body-text "><b>Effective Tools:</b>
                    <ul>
                        <li class="body-text">
                            Analytical software (e.g., Excel, data visualization tools)
                        </li>
                        <li class="body-text">
                            Online resources with detailed, step-by-step explanations
                        </li>
                        <li class="body-text">
                            Problem-solving exercises
                        </li>
                    </ul>
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">2. Sequential Learning</h1>
            <p class="body-text ">
                You prefer a step-by-step approach when learning new material. You need a clear structure and process to absorb information effectively, and you dislike jumping between topics or ideas.
            </p>
            <ul>
                <li class="body-text "><b>Preferred Study Techniques:</b>
                    <ul>
                        <li class="body-text">
                            Organizing notes in a systematic, linear fashion (e.g., outlines, bullet points)
                        </li>
                        <li class="body-text">
                            Following a set schedule or checklist when studying
                        </li>
                        <li class="body-text">
                            Reviewing material in the order it was presented to maintain flow
                        </li>
                    </ul>
                </li>
                <li class="body-text "><b>Effective Tools:</b>
                    <ul>
                        <li class="body-text">
                            Study planners or time management apps
                        </li>
                        <li class="body-text">
                            Chapter-by-chapter breakdowns or summaries
                        </li>
                        <li class="body-text">
                            Courses that provide a clear syllabus or curriculum roadmap
                        </li>
                    </ul>
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">3. Verbal (Linguistic) Learning Style</h1>
            <p class="body-text ">
                While you are more logic-oriented, you still excel when information is presented in a clear, structured verbal format. Detailed explanations, especially those that avoid ambiguity, work well for you.
            </p>
            <ul>
                <li class="body-text "><b>Preferred Study Techniques:</b>
                    <ul>
                        <li class="body-text">
                            Reading textbooks or academic papers with detailed, well-organized content
                        </li>
                        <li class="body-text">
                            Writing summaries or essays to reinforce learning
                        </li>
                        <li class="body-text">
                            Using technical vocabulary and precise language when reviewing material
                        </li>
                    </ul>
                </li>
                <li class="body-text "><b>Effective Tools:</b>
                    <ul>
                        <li class="body-text">
                            Well-organized lecture notes or textbooks
                        </li>
                        <li class="body-text">
                            Educational podcasts or videos that focus on structured content
                        </li>
                        <li class="body-text">
                            Writing tools (e.g., note-taking apps, digital flashcards)
                        </li>
                    </ul>
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">4. Reflective Learning</h1>
            <p class="body-text ">
                You learn best when given time to reflect on the material and analyze its meaning. You prefer to study independently and appreciate time for deep thinking.
            </p>
            <ul>
                <li class="body-text "><b>Preferred Study Techniques:</b>
                    <ul>
                        <li class="body-text">
                            Engaging in quiet, solitary study sessions where you can focus
                        </li>
                        <li class="body-text">
                            Pausing to reflect on what you've learned before moving on to the next topic
                        </li>
                        <li class="body-text">
                            Asking questions to further clarify concepts and ensure full understanding
                        </li>
                    </ul>
                </li>
                <li class="body-text "><b>Effective Tools:</b>
                    <ul>
                        <li class="body-text">
                            A quiet study environment with minimal distractions
                        </li>
                        <li class="body-text">
                            Reflection journals to jot down thoughts and insights
                        </li>
                        <li class="body-text">
                            Study breaks to process and synthesize information
                        </li>
                    </ul>
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">5. Detail-Oriented Learning</h1>
            <p class="body-text ">
                As a <b>Systematic Analyst</b>, you are highly attentive to details, making you meticulous when studying complex subjects. You appreciate in-depth analysis and dislike superficial or vague explanations.
            </p>
            <ul>
                <li class="body-text "><b>Preferred Study Techniques:</b>
                    <ul>
                        <li class="body-text">
                            Taking extensive, detailed notes during lectures or while reading
                        </li>
                        <li class="body-text">
                            Delving deep into topics to understand every facet before moving forward
                        </li>
                        <li class="body-text">
                            Reviewing material multiple times to ensure thorough comprehension
                        </li>
                    </ul>
                </li>
                <li class="body-text "><b>Effective Tools:</b>
                    <ul>
                        <li class="body-text">
                            Academic articles and resources with thorough explanations
                        </li>
                        <li class="body-text">
                            Supplementary reading material to explore subjects in greater detail
                        </li>
                        <li class="body-text">
                            Question banks or problem sets to test your understanding
                        </li>
                    </ul>
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">6. Problem-Solving Approach</h1>
            <p class="body-text ">
                You enjoy learning by applying theoretical concepts to real-world problems. Case studies, simulations, and problem-solving exercises are particularly engaging for you.
            </p>
            <ul>
                <li class="body-text "><b>Preferred Study Techniques:</b>
                    <ul>
                        <li class="body-text">
                            Applying concepts to practical scenarios or hypothetical situations
                        </li>
                        <li class="body-text">
                            Engaging in critical thinking exercises, puzzles, or strategic games
                        </li>
                        <li class="body-text">
                            Working through case studies to test your understanding
                        </li>
                    </ul>
                </li>
                <li class="body-text "><b>Effective Tools:</b>
                    <ul>
                        <li class="body-text">
                            Problem-solving worksheets or case studies
                        </li>
                        <li class="body-text">
                            Real-world simulations (e.g., business strategy games, coding challenges)
                        </li>
                        <li class="body-text">
                            Analytical tools that allow for hands-on learning
                        </li>
                    </ul>
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">
                Tips to Enhance Learning:
            </h1>
            <ul>
                <li class="body-text "><b>Focus on Structured Learning Environments:</b> Courses or study programs that follow a logical sequence will help you thrive. Avoid environments that are overly creative or lack organization.
                </li>
                <li class="body-text "><b>Use Data and Facts:</b> Whenever possible, support your learning with concrete data, studies, or research. This satisfies your need for logical and fact-based understanding.
                </li>
                <li class="body-text "><b>Study Alone First, Then Discuss:</b> While you prefer independent study, discussing complex topics with others after processing the material can further solidify your understanding.
                </li>
                <li class="body-text "><b>Incorporate Analytical Tools:</b> Use spreadsheets, flowcharts, or even coding exercises to analyze information. These tools will allow you to engage deeply with the material in a way that suits your analytical strengths.
                </li>
            </ul>
            <p class="body-text">
                By aligning your study methods with these styles, you’ll enhance your ability to retain and understand information more effectively, while leveraging your strengths as a <b>Logical Strategist</b> and <b>Objective Thinker</b>.
            </p>
            <h1 class="report-header1" style="margin-bottom:25px;margin-top:25px;">Communication and behavior</h1>
            <p class="body-text ">
                As someone with an <b>Analytical Brain</b> and a candid communication style, your approach to interactions is likely rooted in logic, objectivity, and a desire for clarity.
                <br><br>
                Below is an in-depth look at your communication style and behavioral tendencies:
            </p>
            <h1 class="report-header3" style="margin-bottom:10px;">Communication Style</h1>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">1. Direct and Candid</h1>
            <ul>
                <li class="body-text ">You tend to communicate in a straightforward, no-nonsense manner. You value honesty and precision, so you often get straight to the point without unnecessary embellishment.
                </li>
                <li class="body-text ">You dislike ambiguity and prefer clarity in conversations. This means you are often the one asking pointed questions to get to the heart of the matter.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Strengths:</h1>
            <ul>
                <li class="body-text ">Your candid nature means people know where you stand with you, and you’re seen as reliable and trustworthy.
                </li>
                <li class="body-text ">You excel at giving constructive feedback because you focus on facts rather than emotions.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Challenges:</h1>
            <ul>
                <li class="body-text ">Your directness, while efficient, might sometimes come off as blunt or overly critical, especially in emotionally charged situations.
                </li>
                <li class="body-text ">People who are more sensitive may feel intimidated by your communication style, so adapting to different personalities can help smooth interactions.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">2. Fact-Based Communication</h1>
            <ul>
                <li class="body-text ">You prefer conversations that are grounded in facts, logic, and data. This makes you an excellent communicator in professional environments that demand accuracy, such as in problem-solving, decision-making, or strategizing sessions.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Strengths:</h1>
            <ul>
                <li class="body-text ">Your ability to back up your arguments with well-researched information ensures that your points carry weight and are respected.
                </li>
                <li class="body-text ">In group discussions, you help ground conversations in reality, ensuring that decisions are practical and achievable.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Challenges:</h1>
            <ul>
                <li class="body-text ">You might struggle in situations that require emotional expression or subjective viewpoints. People who are more emotionally driven may feel disconnected from your fact-focused approach.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">3. Listening for Logical Flow</h1>
            <ul>
                <li class="body-text ">You are an active listener but tend to focus on the logical flow of the conversation. You prefer that discussions have a clear structure and that you lead to actionable conclusions.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Strengths:</h1>
            <ul>
                <li class="body-text ">You are skilled at catching inconsistencies or gaps in logic and can ask insightful questions that lead to deeper understanding.
                </li>
                <li class="body-text ">You are excellent at synthesizing information and summarizing it in a concise, actionable way.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Challenges:</h1>
            <ul>
                <li class="body-text ">Because of your focus on logic, you may sometimes overlook the emotional undertones of a conversation or miss cues that someone might need empathy rather than a solution.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">4. Preference for Structured Communication</h1>
            <ul>
                <li class="body-text ">You appreciate conversations that are structured, organized, and follow a logical progression. Meetings or discussions that are vague, unstructured, or meander without direction may frustrate you.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Strengths:</h1>
            <ul>
                <li class="body-text ">You are efficient in meetings, driving conversations toward productive outcomes and focusing on practical steps.
                </li>
                <li class="body-text ">You value time and prefer efficiency, so you’re often able to keep discussions on track.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Challenges:</h1>
            <ul>
                <li class="body-text ">Social conversations that are open-ended or exploratory in nature may feel unproductive or frustrating for you. You might unintentionally come across as impatient in such situations.
                </li>
            </ul>
            <!-- ------------------------- -->
            <h1 class="report-header3" style="margin-bottom:10px;">Conflict Resolution Style
            </h1>

            <ul>
                <li class="body-text ">Your natural tendency is to analyze situations and come up with solutions. When faced with challenges, you prefer to break down the issue into smaller, manageable parts and find logical resolutions.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Strengths:</h1>
            <ul>
                <li class="body-text ">Your problem-solving skills make you a valuable team member in high-pressure or complex situations. You are seen as a “go-to” person for resolving issues.
                </li>
                <li class="body-text ">You bring a calm, rational approach to problems, which helps in making well-considered decisions.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Challenges:</h1>
            <ul>
                <li class="body-text ">You might be so focused on finding a solution that you overlook the emotional aspect of a problem, particularly when working with people who are more relationship-driven.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">2. Independent and Self-Sufficient</h1>
            <ul>
                <li class="body-text ">You value autonomy and prefer to work independently on tasks. You are most comfortable when you can control your workflow and approach to a project.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Strengths:</h1>
            <ul>
                <li class="body-text ">Your self-sufficiency allows you to take initiative and get things done without needing much direction. You are often highly productive when working on your own.
                </li>
                <li class="body-text ">You can manage multiple projects or tasks simultaneously without relying heavily on external input.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Challenges:</h1>
            <ul>
                <li class="body-text ">While you prefer independence, it may come across as aloofness to others who value teamwork or collaboration. You might also miss out on the benefits of group brainstorming or collaboration.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">3. Detail-Oriented and Perfectionistic</h1>
            <ul>
                <li class="body-text ">You tend to focus on the details, ensuring that all the "i"s are dotted and "t"s are crossed before moving forward. You don’t like leaving loose ends or uncertain variables.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Strengths:</h1>
            <ul>
                <li class="body-text ">Your meticulousness means you rarely overlook important details, and the quality of your work is consistently high.
                </li>
                <li class="body-text ">You thrive in environments where precision and accuracy are crucial, such as research, data analysis, or strategic planning.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Challenges:</h1>
            <ul>
                <li class="body-text ">Your focus on perfection may sometimes slow down progress, particularly in fast-paced environments where speed is valued over precision. You might also find it difficult to delegate tasks, as you prefer to maintain control over the quality.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">4. Systematic and Methodical</h1>
            <ul>
                <li class="body-text ">You prefer a systematic approach to most tasks. Whether it’s in your personal or professional life, you often create plans, set goals, and methodically work toward them.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Strengths:</h1>
            <ul>
                <li class="body-text ">You bring order to chaos, often developing clear action plans and ensuring that steps are followed logically. This makes you highly reliable in project management or strategic planning.
                </li>
                <li class="body-text ">You are less likely to miss steps in complex processes because of your methodical approach.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Challenges:</h1>
            <ul>
                <li class="body-text ">You may struggle with spontaneous tasks or last-minute changes, as you disrupt your carefully laid-out plans. Flexibility can be challenging in fast-moving environments.
                </li>
            </ul>
            <!-- ------------------- -->
            <h1 class="report-header3" style="margin-bottom:10px;">Behavioral Tendencies
            </h1>
            <p class="body-text">
                Given your logical and direct approach, you typically handle conflicts by focusing on the facts and logic behind the disagreement. You prefer to address issues head-on, ensuring that everyone involved understands the reasoning behind your stance.
            </p>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Strengths:</h1>
            <ul>
                <li class="body-text ">You resolve conflicts efficiently by cutting through emotional tension and focusing on practical solutions.
                </li>
                <li class="body-text ">Your clear communication helps avoid misunderstandings, and you ensure that everyone knows where you stand.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Challenges:</h1>
            <ul>
                <li class="body-text ">In emotionally charged conflicts, your fact-based approach may seem detached or unempathetic. You may need to work on validating others’ emotions before jumping into problem-solving mode.
                </li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Tips for Enhancing Communication and Behavior</h1>
            <ul>
                <li class="body-text "><b>Adapt to Emotional Cues:</b> While you are naturally analytical, recognizing when people need emotional support rather than logical solutions can improve your relationships.
                </li>
                <li class="body-text "><b>Engage in Active Collaboration: </b> Although you prefer working independently, building strong team dynamics through collaboration and open dialogue can increase both personal and team success.
                </li>
                <li class="body-text "><b>Practice Flexibility:</b> Embrace spontaneity and be open to new ideas, even if you don’t fit your usual structured approach. Flexibility will help you thrive in fast-paced environments.
                </li>
                <li class="body-text "><b>Empathy in Communication:</b> While being candid is a strength, consider the emotional tone of your communication. Offering empathy, even when providing direct feedback, will make your communication more effective in sensitive situations.
                </li>
            </ul>
            <p class="body-text">
                By focusing on these key areas, you can further refine your communication style and behavioral tendencies, making them even more impactful in both your professional and personal life.
            </p>
            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Diet and Nutrition</h1>
            <p class="body-text ">
                For you with an Analytical brain type, your approach to diet and nutrition is guided by logic, precision, and a desire for efficiency. Here are key aspects of how you typically manage your nutrition:
            </p>
            <ol>
                <li class="body-text "><b>Structured Meal Planning:</b> You thrive on organization and prefer to have clear, structured meal plans. Meal prepping appeals to them as it allows for control over portion sizes and nutritional balance, helping them stick to a precise and consistent diet.
                </li>
                <li class="body-text "><b>Nutritional Value Focus:</b> Analytical you are likely to read labels and focus on the nutritional content of your meals. They are particularly interested in understanding how nutrients like omega-3s, fiber, or antioxidants can support both physical health and cognitive function.</li>
                <li class="body-text "><b>Mindful Eating:</b> You prefer eating with focus and intention, savoring each bite. Mindful eating practices, such as paying attention to fullness and enjoying the sensory experience of eating, align with your need for control and precision.
                </li>
                <li class="body-text "><b>Evidence-Based Choices:</b> You make dietary decisions based on research. You might explore various diets—such as Mediterranean, keto, or plant-based—analyzing the data behind each one before committing to a regimen that best suits your body and brain performance goals.</li>
                <li class="body-text "><b>Routine and Consistency: </b> You value routine and are likely to follow a consistent eating schedule, whether it’s three meals a day or smaller, frequent meals. Routine provides a sense of control and ensures you are consistently fueling your body.
                </li>
                <li class="body-text "><b>Portion Control:</b> Analytical eaters are meticulous about portion sizes, often using tools like measuring cups or scales to ensure accuracy. This helps them maintain balance and meet your dietary goals, whether for weight management or energy optimization.</li>
                <li class="body-text "><b>Hydration Awareness:</b> You are mindful of hydration, understanding its importance for both physical and cognitive health. Analytical eaters may track your water intake to ensure you meet your daily hydration goals.
                </li>
            </ol>
            <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Best Eating Habits for Analytical Brains:</h1>
            <ul>
                <li class="body-text ">Meal planning and prepping for efficiency.
                </li>
                <li class="body-text ">Paying close attention to nutritional content.
                </li>
                <li class="body-text ">Making evidence-based diet choices.
                </li>
                <li class="body-text ">Sticking to consistent eating schedules.
                </li>
                <li class="body-text ">Practicing portion control to avoid overeating.
                </li>
                <li class="body-text ">Monitoring hydration to support overall health.
                </li>
            </ul>
            <?php
            if ($age >= 12 && $age <= 18) { ?>
                <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Subjects preferred for matching career options</h1>
                <p class="body-text ">
                    Based on your cognitive style and the career options that align with your strengths, here are the <b>preferred subjects</b> that match the corresponding career paths. These subjects emphasize logic, structure, analysis, and practical problem-solving—qualities that are core to your natural inclination.
                </p>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">1. Mathematics</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Data Analyst, Financial Analyst, Engineer, Software Developer, Accountant
                    </li>
                    <li class="body-text "><b>Why it fits:</b> Mathematics is essential for analyzing data, solving quantitative problems, and applying logical reasoning—key skills in many analytical and technical careers. Subjects like algebra, calculus, and statistics form the foundation for careers in data science, finance, and engineering.
                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">2. Physics</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Engineer (Mechanical, Civil, Electrical), Research Scientist, Architect
                    </li>
                    <li class="body-text "><b>Why it fits:</b> Physics requires logical thinking, problem-solving, and understanding of natural laws. It’s crucial for engineering fields and technical roles where scientific principles are applied to real-world problems, as well as architecture and research positions that involve structural and material analysis.
                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">3. Computer Science</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Software Developer, Data Scientist, IT Systems Administrator, Database Administrator
                    </li>
                    <li class="body-text "><b>Why it fits:</b> Computer Science focuses on logical problem-solving, programming, and understanding complex systems. It is essential for careers in software development, IT management, and any role that involves managing and processing information through technology.
                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">4. Economics
                </h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Financial Analyst, Business Analyst, Economist, Operations Manager
                    </li>
                    <li class="body-text "><b>Why it fits:</b> Economics involves studying data, trends, and market behaviors, providing the tools to analyze and solve business problems. Microeconomics and macroeconomics are particularly relevant for those interested in finance, business analysis, and operations management.
                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">5. Accounting and Finance</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Accountant, Auditor, Financial Analyst, Tax Consultant
                    </li>
                    <li class="body-text "><b>Why it fits:</b> These subjects teach the skills of managing financial data, auditing, and taxation. They are a perfect match for roles that require precision, attention to detail, and financial management, making them crucial for careers in accounting, auditing, and financial analysis.
                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">6. Engineering (Mechanical, Civil, Electrical, Software)</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Mechanical Engineer, Civil Engineer, Electrical Engineer, Software Developer
                    </li>
                    <li class="body-text "><b>Why it fits:</b> Engineering subjects emphasize the practical application of physics, mathematics, and technology to solve real-world problems. Structural design, materials science, and software development align well with your practical, methodical mindset.

                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">7. Statistics</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Data Scientist, Actuary, Research Analyst, Market Researcher
                    </li>
                    <li class="body-text "><b>Why it fits:</b> Statistics involves data analysis, probability, and interpretation of data trends—skills essential in research, finance, data science, and roles that require strong quantitative analysis.

                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">8. Business Studies</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Business Analyst, Project Manager, Operations Manager, Entrepreneur

                    </li>
                    <li class="body-text "><b>Why it fits:</b> Business Studies provides knowledge on how organizations operate, along with skills in management, strategy, and business operations. These are crucial for roles that involve managing teams, projects, or analyzing business processes.

                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">9. Information Technology (IT)</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> IT Systems Administrator, Database Administrator, Cybersecurity Specialist

                    </li>
                    <li class="body-text "><b>Why it fits:</b> IT covers topics such as systems management, networking, database management, and cybersecurity. These subjects prepare you for careers in technology management, where logical thinking and technical skills are vital.

                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">10. Chemistry</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Pharmacist, Chemical Engineer, Research Scientist

                    </li>
                    <li class="body-text "><b>Why it fits:</b> Chemistry involves methodical experimentation, precision, and a deep understanding of matter and its properties. These skills are key in pharmaceutical roles, chemical engineering, and research.

                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">11. Architecture</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Architect, Urban Planner
                    <li class="body-text "><b>Why it fits:</b> Architecture requires a mix of creative and practical skills, combining structural design with the application of engineering principles. Urban planning and environmental design also demand logical problem-solving and spatial organization.
                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">12. Supply Chain Management</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Logistics Manager, Supply Chain Manager, Operations Manager
                    </li>
                    <li class="body-text "><b>Why it fits:</b> Supply Chain Management focuses on the efficient flow of goods and services. It aligns with your need for organization, problem-solving, and process optimization, making it a strong subject match for roles in logistics and operations.
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">13. Law</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Lawyer, Corporate Counsel, Tax Attorney
                    </li>
                    <li class="body-text "><b>Why it fits:</b> Law requires critical thinking, logical analysis, and attention to detail. Specializing in contract law, tax law, or corporate law aligns well with your preference for structured processes and precision.
                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">14. Urban Planning/Environmental Science</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Urban Planner, Environmental Consultant, Architect
                    </li>
                    <li class="body-text "><b>Why it fits:</b> Urban Planning and Environmental Science involve systematic problem-solving, resource management, and sustainable design—all areas where L2 dominant you excel. These subjects focus on planning, optimizing land use, and environmental sustainability.
                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">15. Medicine (Certain Specialties)</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Radiologist, Pathologist, Pharmacist, Medical Researcher
                    </li>
                    <li class="body-text "><b>Why it fits:</b> Medicine, particularly fields like radiology, pathology, and pharmacology, require analytical skills, attention to detail, and a structured approach to diagnosing and solving medical problems. These roles align well with your systematic thinking and preference for precision.
                    </li>
                </ul>
                <h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">16. Logistics and Operations Management</h1>
                <ul>
                    <li class="body-text "><b>Related Career Paths:</b> Logistics Manager, Operations Manager, Supply Chain Analyst
                    </li>
                    <li class="body-text "><b>Why it fits:</b> These subjects involve managing the flow of goods, services, and processes efficiently. The focus on organization and optimizing operations aligns perfectly with your structured, methodical mindset.
                    </li>
                </ul>
            <?php }
            ?>
        <?php
        endif;
        ?>

    </div>

</body>

</html>
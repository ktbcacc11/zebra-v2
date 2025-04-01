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



            <!-- 2     23pg-26pg ------------------------------- -->


            <h1 class="report-header1 text-center" style="margin-bottom:25px;">Your Brain Assessment Result</h1>
            <h1 class="report-header2" style="margin-bottom:15px;">Basic Brain Report</h1>
            <p class="body-text">
                Your brain is highly fact-oriented, with a natural inclination to tackle practical problems head-on. You are detail-focused and methodical, preferring to approach tasks in a systematic manner. Your strength lies in your ability to take complex information and break it down into manageable, actionable steps. You tend to rely on proven methods and consistent processes, ensuring that everything is thoroughly planned before you proceed.
                <br><br>
                Your logical and organized approach means you excel in environments that require precision and hands-on problem-solving. Others admire your dependability and your capacity to bring clarity and structure to ambiguous situations. You are driven by a need for certainty and prefer to operate in familiar, controlled environments where outcomes can be predicted based on reliable data.
                <br><br>
                Your tendency to stick to facts over assumptions allows you to make informed decisions that are grounded in reality. While others might be swayed by emotions or abstract ideas, you stay focused on what is practical and can be immediately applied.
            </p>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Your Indices for Future Growth</h1>
            <p class="body-text">
                Understanding and evaluating various indices like Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration, and 21st-Century Agility can provide insights into areas for growth and personal development.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Leadership: Moderate</h1>
            <p class="body-text">
                You have the potential to lead by example, particularly in environments where precision and reliability are valued. Developing soft leadership skills, such as motivating others and delegating effectively, can enhance your leadership capabilities.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Creativity: Moderate</h1>
            <p class="body-text">
                While you may not always be inclined towards abstract creativity, your strength lies in practical innovation. Focusing on problem-solving that incorporates both logical thinking and creative solutions can further expand your skill set.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">GIG Potential: Moderate</h1>
            <p class="body-text">
                You may prefer structured environments but have the ability to thrive in dynamic, freelance settings if you develop a tolerance for ambiguity. Working on flexibility and embracing new challenges will increase your GIG potential.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Entrepreneurship: Low</h1>
            <p class="body-text">
                You are more comfortable with stability and clear expectations, so entrepreneurship may not be your natural inclination. Building a risk-tolerance mindset and exploring calculated opportunities can help you grow in this area.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Team Collaboration Index: Moderate</h1>
            <p class="body-text">
                You work well with others when the task is clearly defined and roles are straightforward. However, improving communication and learning to work more fluidly in collaborative, less structured environments can enhance your teamwork abilities.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">21st-Century Agility Index: Low</h1>
            <p class="body-text">
                Adapting to constant change can be challenging for you. Developing a mindset of continuous learning and embracing technological advancements will help you stay competitive and agile in today's evolving landscape.
            </p>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Read More: Advanced Brain Report</h1>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Your Cognitive Profile: The Systematic Organizer</h1>
            <p class="body-text">
                Your brain is wired for practical application and systematic organization. As a Systematic Organizer, you excel in creating order from chaos, implementing structured processes, and ensuring that tasks are completed efficiently and accurately. You approach challenges with a methodical mindset, meticulously planning each step before execution. Your attention to detail and commitment to reliability make you a cornerstone in any team or project that requires precision and consistency.
                <br><br>
                You thrive in environments where procedures, protocols, and clear expectations are established. Your natural inclination is to follow proven methods, minimizing risks by relying on past experiences and data-driven insights. Colleagues and peers often rely on your dependability and your ability to bring stability to dynamic situations. You are the person who ensures that the wheels keep turning smoothly, preventing oversights and maintaining high standards of quality.
                <br><br>
                However, every cognitive style presents opportunities for growth. The following is a detailed evaluation of your current strengths and areas for development, focusing on key indices that reflect both your cognitive abilities and adaptive capacities.
            </p>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Detailed Evaluation: Key Indices for Personal & Professional Growth</h1>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Leadership: Moderate</h1>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:10px;">Current Strengths:</h1>
            <ul>
                <li class="body-text"><b>Operational Leadership:</b> You excel at leading teams in structured settings, ensuring that everyone understands your roles and responsibilities.</li>
                <li class="body-text"><b>Process Management:</b> Your ability to design and implement efficient processes makes you a natural leader in operational environments.</li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Growth Potential:</h1>
            <ul>
                <li class="body-text"><b>Adaptive Leadership:</b> Developing flexibility in your leadership approach can enhance your effectiveness, especially in unpredictable situations.</li>
                <li class="body-text"><b>Inspirational Skills:</b> Cultivating the ability to motivate and inspire others beyond procedural directives will strengthen your overall leadership impact.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Creativity: Moderate</h1>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:10px;">Current Strengths:</h1>
            <ul>
                <li class="body-text"><b>Process Improvement:</b> You have a knack for enhancing existing systems to improve efficiency and effectiveness.</li>
                <li class="body-text"><b>Practical Solutions:</b> Your creativity shines when finding practical solutions to logistical challenges.</li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Growth Potential:</h1>
            <ul>
                <li class="body-text"><b>Innovative Thinking:</b> Encouraging yourself to think beyond established methods can lead to groundbreaking ideas.</li>
                <li class="body-text"><b>Embracing Ambiguity:</b> Allowing for exploration without immediate structure can foster more abstract forms of creativity.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Entrepreneurship: Low</h1>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:10px;">Growth Potential:</h1>
            <ul>
                <li class="body-text"><b>Risk-Taking Abilities:</b> Developing a comfort level with calculated risks can propel entrepreneurial endeavors.</li>
                <li class="body-text"><b>Visionary Thinking:</b> Expanding your focus from operational details to include long-term strategic vision will enhance your entrepreneurial potential.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Team Collaboration Index: Moderate</h1>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:10px;">Current Strengths:</h1>
            <ul>
                <li class="body-text"><b>Role Clarity:</b> You function well in teams where roles are defined, and expectations are clear.</li>
                <li class="body-text"><b>Dependability:</b> Team members trust you to fulfill your responsibilities diligently.</li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Growth Potential:</h1>
            <ul>
                <li class="body-text"><b>Interpersonal Communication:</b> Improving active listening and open communication can enhance team synergy.</li>
                <li class="body-text"><b>Embracing Diverse Perspectives:</b> Being open to different working styles and ideas can enrich collaborative efforts.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. 21st-Century Agility Index: Low</h1>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:10px;">Growth Potential:</h1>
            <ul>
                <li class="body-text"><b>Embracing Technological Advances:</b> Actively seeking out new technologies can keep your skills relevant in a rapidly evolving landscape.</li>
                <li class="body-text"><b>Adaptive Learning:</b> Developing the ability to learn new skills quickly will enhance your agility in the modern world.</li>
            </ul>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Conclusion: Unlocking Your Full Potential</h1>
            <p class="body-text">
                As a Systematic Organizer, your strengths in planning, organization, and methodical execution are invaluable assets. You ensure that goals are met efficiently and standards are maintained, providing stability and reliability in both personal and professional settings.
                <br><br>
                By focusing on the outlined growth areas—such as enhancing leadership adaptability, fostering creative thinking, embracing flexibility, and improving collaborative skills—you can expand your influence and effectiveness. Embracing change and stepping outside your comfort zone will not only augment your existing strengths but also open new avenues for personal and professional fulfillment.
                <br><br>
                Your journey towards greater agility and innovation will position you as a well-rounded professional, capable of navigating the complexities of the modern world while maintaining the precision and reliability that define you. Embrace these opportunities for growth, and you will unlock your full potential as a leader, innovator, and collaborator.
            </p>


            <!-- ------------ 26 -28pg  -->


            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Preferred Studying and Learning Styles</h1>
            <p class="body-text">
                As someone with a <b>Practical Thinker</b> brain dominance, your learning style is rooted in logic, organization, and structure. You prefer clear, methodical approaches to studying and thrive when given the tools to systematically break down information.
                <br><br>
                Here’s a breakdown of your preferred learning styles based on your brain’s strengths:
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Logical/Mathematical Learning Style</h1>
            <p class="body-text">
                You excel when learning environments are structured around reasoning, analysis, and logic. You prefer to understand the "why" behind concepts and enjoy working through systems and processes that follow logical rules.
            </p>
            <ul>
                <li class="body-text"><b>Preferred Study Techniques:</b>
                    <ul>
                        <li class="body-text">Breaking down complex concepts into step-by-step processes.</li>
                        <li class="body-text">Using flowcharts, diagrams, or mind maps to visualize how different ideas interconnect.</li>
                        <li class="body-text">Solving problems through patterns, formulas, or models.</li>
                    </ul>
                </li>
                <li class="body-text"><b>Effective Tools:</b>
                    <ul>
                        <li class="body-text">Analytical tools like Excel or data visualization software.</li>
                        <li class="body-text">Detailed resources that provide logical explanations or clear step-by-step guides.</li>
                        <li class="body-text">Problem-solving exercises, such as puzzles or math-based challenges.</li>
                    </ul>
                </li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Sequential Learning</h1>
            <p class="body-text">
                As someone who thrives on structure, you prefer to approach learning in a step-by-step manner. You dislike jumping from topic to topic without following a clear sequence.
            </p>
            <ul>
                <li class="body-text"><b>Preferred Study Techniques:</b>
                    <ul>
                        <li class="body-text">Organizing notes in a systematic, linear format (e.g., outlines or bullet points).</li>
                        <li class="body-text">Sticking to a set schedule or checklist for studying.</li>
                        <li class="body-text">Reviewing material in the same order it was presented to maintain coherence.</li>
                    </ul>
                </li>
                <li class="body-text"><b>Effective Tools:</b>
                    <ul>
                        <li class="body-text">Study planners or time management apps.</li>
                        <li class="body-text">Chapter-by-chapter summaries or breakdowns.</li>
                        <li class="body-text">Courses with clear syllabi and roadmap structures.</li>
                    </ul>
                </li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Verbal (Linguistic) Learning Style</h1>
            <p class="body-text">
                Though you are primarily logic-driven, you appreciate clear, structured verbal explanations. You excel when information is presented in an organized, detailed format with no room for ambiguity.
            </p>
            <ul>
                <li class="body-text"><b>Preferred Study Techniques:</b>
                    <ul>
                        <li class="body-text">Reading textbooks or academic papers with well-structured content.</li>
                        <li class="body-text">Writing summaries or notes to reinforce your learning.</li>
                        <li class="body-text">Using precise, technical vocabulary when reviewing concepts.</li>
                    </ul>
                </li>
                <li class="body-text"><b>Effective Tools:</b>
                    <ul>
                        <li class="body-text">Organized lecture notes or well-written textbooks.</li>
                        <li class="body-text">Educational videos or podcasts that offer structured explanations.</li>
                        <li class="body-text">Writing tools like digital flashcards or note-taking apps.</li>
                    </ul>
                </li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Reflective Learning</h1>
            <p class="body-text">
                You benefit from taking time to reflect on the material you've studied. Solitary study sessions help you analyze and internalize information, allowing you to process what you've learned more deeply.
            </p>
            <ul>
                <li class="body-text"><b>Preferred Study Techniques:</b>
                    <ul>
                        <li class="body-text">Studying in quiet, focused environments that allow for deep concentration.</li>
                        <li class="body-text">Pausing periodically to reflect and digest information.</li>
                        <li class="body-text">Asking yourself clarifying questions to ensure full understanding before moving on.</li>
                    </ul>
                </li>
                <li class="body-text"><b>Effective Tools:</b>
                    <ul>
                        <li class="body-text">A distraction-free study space.</li>
                        <li class="body-text">Reflection journals to capture your thoughts and insights.</li>
                        <li class="body-text">Study breaks for processing new information.</li>
                    </ul>
                </li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Detail-Oriented Learning</h1>
            <p class="body-text">
                Your attention to detail is one of your strongest assets. You enjoy digging deep into subjects to ensure complete understanding and often prefer thorough explanations over high-level summaries.
            </p>
            <ul>
                <li class="body-text"><b>Preferred Study Techniques:</b>
                    <ul>
                        <li class="body-text">Taking detailed, thorough notes during lectures or readings.</li>
                        <li class="body-text">Diving into topics and revisiting complex concepts multiple times.</li>
                        <li class="body-text">Cross-referencing information from different sources to build a comprehensive understanding.</li>
                    </ul>
                </li>
                <li class="body-text"><b>Effective Tools:</b>
                    <ul>
                        <li class="body-text">Academic articles or supplementary resources that provide in-depth analysis.</li>
                        <li class="body-text">Problem sets or question banks that challenge your knowledge.</li>
                        <li class="body-text">Additional reading materials that explore specific topics in more depth.</li>
                    </ul>
                </li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Problem-Solving Approach</h1>
            <p class="body-text">
                You prefer learning through application, using theoretical concepts to solve real-world problems. Case studies, simulations, and strategic exercises are particularly effective for you.
            </p>
            <ul>
                <li class="body-text"><b>Preferred Study Techniques:</b>
                    <ul>
                        <li class="body-text">Applying learned concepts to practical or hypothetical scenarios.</li>
                        <li class="body-text">Engaging in strategic games, puzzles, or critical thinking exercises.</li>
                        <li class="body-text">Working through case studies that allow you to test your understanding of material.</li>
                    </ul>
                </li>
                <li class="body-text"><b>Effective Tools:</b>
                    <ul>
                        <li class="body-text">Problem-solving worksheets or hands-on activities.</li>
                        <li class="body-text">Real-world simulations, such as business strategy games or coding exercises.</li>
                        <li class="body-text">Analytical software that lets you engage with practical challenges.</li>
                    </ul>
                </li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Tips to Enhance Learning:</h1>
            <ol>
                <li class="body-text"><b>Focus on Structured Learning Environments:</b> Seek courses or programs with a clear structure and logical sequence. Avoid environments that prioritize creativity or ambiguity over order and precision.</li>
                <li class="body-text"><b>Use Data and Facts:</b> Rely on data-driven studies, research, and proven methodologies whenever possible. This aligns with your need for logical and evidence-based learning.</li>
                <li class="body-text"><b>Study Alone First, Then Discuss:</b> Start with independent study to absorb material on your own. Once you’ve processed the information, discussing it with others can solidify your understanding.</li>
                <li class="body-text"><b>Incorporate Analytical Tools:</b> Use tools like spreadsheets, flowcharts, or even coding exercises to analyze and process information in a way that suits your logical mindset.</li>
            </ol>

            <p class="body-text">
                By aligning your study methods with these learning styles, you will enhance your ability to retain and process information effectively. As a <b>Practical Thinker</b>, leaning into your methodical, problem-solving approach will help you achieve your learning goals with precision and clarity.
            </p>


            <!-- ------------------- 28-30pg -------------- -->


            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Communication and Behavior</h1>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Communication Style:</h1>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:10px;">1. Direct and Clear</h1>
            <ul>
                <li class="body-text"><b>How you communicate:</b> You prefer to communicate in a straightforward, concise manner. There’s little room for ambiguity in how you express yourself, and you value clarity in conversations.</li>
                <li class="body-text"><b>Why it works:</b> This direct approach ensures that instructions, feedback, and expectations are understood, minimizing confusion and increasing efficiency.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Fact-Based and Logical</h1>
            <ul>
                <li class="body-text"><b>How you communicate:</b> Your communication tends to be fact-driven, with a strong reliance on logic and data to back up your statements. You avoid speculation or emotional reasoning, sticking to what is proven or concrete.</li>
                <li class="body-text"><b>Why it works:</b> This makes you a reliable source of information, and people often turn to you for objective, rational insights. Your logical approach helps you break down complex issues into understandable points.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Structured and Sequential</h1>
            <ul>
                <li class="body-text"><b>How you communicate:</b> You prefer to present ideas in a structured and logical sequence, leading people step-by-step through your thought process. You dislike jumping from topic to topic without a clear flow.</li>
                <li class="body-text"><b>Why it works:</b> This ensures that your audience can follow your reasoning and understand your points clearly, especially in presentations or problem-solving discussions.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Reserved with Emotions</h1>
            <ul>
                <li class="body-text"><b>How you communicate:</b> You tend to communicate more about facts and less about emotions. You may not always share your feelings openly and prefer to keep interactions focused on the task at hand.</li>
                <li class="body-text"><b>Why it works:</b> This can help maintain professionalism, especially in work settings, but it can also mean that others might perceive you as distant or unapproachable in more emotionally driven conversations.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Detail-Oriented</h1>
            <ul>
                <li class="body-text"><b>How you communicate:</b> You focus on specifics and pay close attention to details when communicating, ensuring that all aspects of a topic are covered.</li>
                <li class="body-text"><b>Why it works:</b> Your thoroughness prevents misunderstandings and allows for a more comprehensive understanding of the subject, which is valuable in technical discussions or situations requiring precision.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Behavior:</h1>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:10px;">1. Practical and Solution-Oriented</h1>
            <ul>
                <li class="body-text"><b>How you behave:</b> You are highly practical, always seeking logical solutions to problems. You tend to focus on what works and avoid getting bogged down in theoretical or abstract ideas.</li>
                <li class="body-text"><b>Why it works:</b> This makes you effective in problem-solving roles, as you can quickly cut through irrelevant information and focus on actionable solutions.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Methodical and Organized</h1>
            <ul>
                <li class="body-text"><b>How you behave:</b> You like to follow systems and processes. Whether working on a project or organizing tasks, you prefer to operate in a structured, step-by-step manner.</li>
                <li class="body-text"><b>Why it works:</b> This methodical behavior ensures that tasks are completed efficiently and thoroughly, leaving little room for error or oversight.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Independent</h1>
            <ul>
                <li class="body-text"><b>How you behave:</b> You are comfortable working alone and often prefer independent tasks where you can focus without interruptions. Collaboration may not come naturally unless there’s a clear structure.</li>
                <li class="body-text"><b>Why it works:</b> This independence allows you to concentrate fully on the task at hand, producing high-quality work when given the space to think and analyze without distractions.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Cautious and Risk-Averse</h1>
            <ul>
                <li class="body-text"><b>How you behave:</b> You tend to be cautious when approaching new projects or situations. You prefer to have all the information before making decisions and are not one to rush into things without proper consideration.</li>
                <li class="body-text"><b>Why it works:</b> This cautious behavior helps prevent mistakes and ensures that decisions are well thought out, especially in environments where precision and planning are crucial.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Detail-Focused</h1>
            <ul>
                <li class="body-text"><b>How you behave:</b> You are highly focused on details and tend to notice small errors or inconsistencies that others might overlook. This can lead to perfectionism in your work.</li>
                <li class="body-text"><b>Why it works:</b> Your attention to detail ensures high accuracy and quality, which is an asset in tasks that require meticulousness, such as data analysis, project planning, or technical work.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Reserved in Social Interactions</h1>
            <ul>
                <li class="body-text"><b>How you behave:</b> In social settings, you may come across as reserved or introverted, especially in large groups. You prefer meaningful conversations with a clear purpose rather than casual, surface-level interactions.</li>
                <li class="body-text"><b>Why it works:</b> This reserved nature allows you to focus on the content of conversations rather than social dynamics, which can make you an excellent listener and problem-solver in one-on-one settings.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">7. Focused on Facts Over Emotions</h1>
            <ul>
                <li class="body-text"><b>How you behave:</b> In both personal and professional settings, you are more inclined to focus on facts and logic rather than emotional responses. While others may be swayed by feelings, you remain objective.</li>
                <li class="body-text"><b>Why it works:</b> This ensures that your decisions are well-reasoned and based on concrete information. However, it’s important to be aware that this behavior can sometimes come across as emotionally detached.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Tips for Enhancing Communication and Behavior:</h1>
            <ol>
                <li class="body-text"><b>Balance Logic with Empathy:</b> While your logical approach is highly effective, balancing it with empathy can help in emotionally charged situations. Acknowledging others’ feelings, even when focusing on facts, can enhance relationships.</li>
                <li class="body-text"><b>Develop Flexibility in Communication:</b> Since you prefer structure, try to be more adaptable in conversations that may shift between topics. This flexibility can improve collaboration, especially in dynamic group settings.</li>
                <li class="body-text"><b>Practice Active Listening in Team Settings:</b> In group environments, focus on listening to others’ viewpoints, even if you are more abstract or emotion-driven. This will improve collaboration and make others feel heard.</li>
                <li class="body-text"><b>Engage in Social Situations to Build Rapport:</b> Though you may prefer more task-focused conversations, taking the time to engage socially with peers or colleagues can help build stronger connections and enhance teamwork.</li>
                <li class="body-text"><b>Incorporate Emotional Intelligence in Leadership:</b> If you are in a leadership role, consider incorporating more emotional intelligence by recognizing the emotional needs of your team members. This will help you connect with them on a deeper level, motivating and inspiring your performance.</li>
            </ol>

            <p class="body-text">
                By understanding your natural communication and behavioral tendencies as an <b>L2 dominant</b> individual, you can enhance both personal and professional interactions. You already excel in structured, logical settings, but expanding your emotional awareness and adaptability will further strengthen your relationships and influence.
            </p>


            <!-- ----------------30-32pg --------------------- -->


            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Inclination for Subjects Naturally</h1>
            <p class="body-text">
                As a <b>Practical Thinker</b> (Fastidious brain), your brain’s natural inclination gravitates toward subjects that require logic, structure, practicality, and clear, sequential thinking. You are drawn to areas where problem-solving, precision, and detail are essential, and you prefer subjects that provide tangible, real-world applications of concepts.
                <br><br>
                Here are the subjects you are naturally inclined towards:
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Mathematics</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Mathematics is highly logical and structured, requiring the use of formulas, algorithms, and step-by-step processes, which aligns with your preference for organized, fact-based learning. The subject allows you to engage in problem-solving, critical thinking, and precision, making it a natural fit for your strengths.</li>
                <li class="body-text"><b>Subfields of interest:</b> Algebra, Calculus, Statistics, and Applied Mathematics.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Physics</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Physics involves understanding the laws governing the physical world, often through logical reasoning, experiments, and mathematical models. The subject offers a structured approach to solving complex problems and exploring real-world applications of theoretical concepts, which appeals to your methodical mindset.</li>
                <li class="body-text"><b>Subfields of interest:</b> Mechanics, Thermodynamics, and Electromagnetism.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Engineering</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Engineering combines practical problem-solving with logical analysis, allowing you to apply scientific principles in real-world settings. Your focus on structure and detail will help you excel in engineering disciplines that require systematic planning and design.</li>
                <li class="body-text"><b>Subfields of interest:</b> Civil Engineering, Mechanical Engineering, Electrical Engineering, and Software Engineering.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Computer Science/Information Technology</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Computer Science involves logical thinking, coding, and developing solutions to technical problems. The structured approach of programming languages and the analytical nature of software development align well with your methodical thinking.</li>
                <li class="body-text"><b>Subfields of interest:</b> Software Development, Data Science, Cybersecurity, and Artificial Intelligence.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Economics</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Economics is a data-driven subject that involves analyzing trends, patterns, and cause-effect relationships within markets and economies. The logical approach to understanding resource distribution, market behaviors, and financial systems fits your structured thinking.</li>
                <li class="body-text"><b>Subfields of interest:</b> Microeconomics, Macroeconomics, and Econometrics.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Accounting and Finance</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Accounting and finance require attention to detail, precision, and methodical approaches to managing numbers and financial data. Your natural affinity for structure and analysis makes you well-suited to subjects that demand accuracy and logical organization.</li>
                <li class="body-text"><b>Subfields of interest:</b> Financial Analysis, Auditing, and Taxation.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">7. Chemistry</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Chemistry, particularly physical and analytical chemistry, requires systematic experimentation, logical reasoning, and attention to molecular structures and reactions. The subject provides a clear framework for understanding complex systems, which appeals to your practical mindset.</li>
                <li class="body-text"><b>Subfields of interest:</b> Organic Chemistry, Inorganic Chemistry, and Analytical Chemistry.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">8. Architecture</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Architecture involves blending creativity with practicality, requiring you to design structures based on logical principles, engineering constraints, and detailed planning. The combination of aesthetics and functionality fits your structured approach to problem-solving.</li>
                <li class="body-text"><b>Subfields of interest:</b> Urban Planning, Structural Design, and Environmental Design.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">9. Business Management</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Business Management involves organizing resources, solving operational challenges, and making data-driven decisions. The structured, process-driven nature of managing teams, projects, and strategies fits well with your logical and practical thinking.</li>
                <li class="body-text"><b>Subfields of interest:</b> Operations Management, Project Management, and Strategic Planning.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">10. Law</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Law requires a structured, logical analysis of cases, evidence, and legal principles. Your ability to work through complex issues step-by-step and apply logic to real-world scenarios makes you well-suited for fields within the legal domain.</li>
                <li class="body-text"><b>Subfields of interest:</b> Corporate Law, Tax Law, and Contract Law.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Other Inclinations Based on Your Strengths:</h1>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:10px;">1. Statistics and Data Analysis</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> This involves working with numbers, analyzing data sets, and deriving conclusions based on statistical methods. Your logical approach and attention to detail will make you excel in tasks that require thorough analysis and interpretation of data.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Logistics and Supply Chain Management</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> This field focuses on organizing and optimizing the flow of goods and services. Your methodical thinking, preference for structure, and analytical skills can help you succeed in managing logistics and operations effectively.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Medicine (Certain Specialties)</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Fields like radiology, pathology, or medical research require logical analysis, attention to detail, and a methodical approach to diagnosing and solving medical problems. These areas align with your practical and scientific thinking style.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Study Tips for Your Brain:</h1>
            <ul>
                <li class="body-text"><b>Focus on structure:</b> Use outlines, mind maps, or flowcharts to break down and understand complex concepts.</li>
                <li class="body-text"><b>Emphasize practical application:</b> Focus on subjects where you can apply theories to real-world problems, as this will enhance your engagement and retention.</li>
                <li class="body-text"><b>Utilize logical reasoning:</b> Engage in subjects that allow you to use critical thinking, logical patterns, and cause-and-effect analysis, which are natural strengths for practical thinkers.</li>
                <li class="body-text"><b>Seek detailed explanations:</b> Choose subjects that provide in-depth analysis and avoid superficial explanations, as you value precision and thorough understanding.</li>
            </ul>

            <p class="body-text">
                By focusing on subjects that align with your strengths as a <b>Practical Thinker</b>, you can make the most of your natural inclinations for logical, structured, and methodical learning.
            </p>


            <!-- ------------------32-34pg----------- -->


            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Diet and Nutrition</h1>
            <p class="body-text">
                As a <b>Practical Thinker</b>, your approach to diet and nutrition is guided by logic, precision, and a desire for efficiency. Here are the key aspects of how you typically manage your nutrition:
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Structured Meal Planning</h1>
            <ul>
                <li class="body-text"><b>Approach:</b> You thrive on organization and prefer having a clear, structured meal plan. You likely enjoy meal prepping because it allows you to control portion sizes and nutritional balance in a precise and consistent manner.</li>
                <li class="body-text"><b>Why it works:</b> Structured meal planning ensures that every meal aligns with your nutritional goals, providing a sense of control over what you consume and reducing decision fatigue.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Nutritional Value Focus</h1>
            <ul>
                <li class="body-text"><b>Approach:</b> You are likely to read food labels and focus on the nutritional content of your meals. You’re interested in understanding how specific nutrients like omega-3s, fiber, protein, and antioxidants contribute to your physical and cognitive health.</li>
                <li class="body-text"><b>Why it works:</b> Your attention to detail ensures that you make informed, evidence-based decisions about your diet, optimizing both mental clarity and physical performance.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Mindful Eating</h1>
            <ul>
                <li class="body-text"><b>Approach:</b> You prefer eating with focus and intention, savoring each bite. Mindful eating practices, such as paying attention to fullness and enjoying the sensory experience of food, align with your need for control and precision.</li>
                <li class="body-text"><b>Why it works:</b> Mindful eating prevents overeating and helps you stay in tune with your body’s signals, ensuring that you eat only what is necessary and enjoy the process.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Evidence-Based Choices</h1>
            <ul>
                <li class="body-text"><b>Approach:</b> Your dietary decisions are often rooted in research. You may explore different diets—like Mediterranean, ketogenic, or plant-based—analyzing the data behind each one before choosing a regimen that optimizes your brain and body performance.</li>
                <li class="body-text"><b>Why it works:</b> Relying on scientific evidence ensures that your diet supports your long-term health goals, helping you make informed, logical choices about what works best for your body.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Routine and Consistency</h1>
            <ul>
                <li class="body-text"><b>Approach:</b> You value routine and are likely to follow a consistent eating schedule, whether it’s three meals a day or smaller, frequent meals. Consistency provides a sense of control and ensures you are fueling your body in a balanced way.</li>
                <li class="body-text"><b>Why it works:</b> Maintaining a regular eating routine supports sustained energy levels throughout the day, preventing the spikes and dips that can impair focus and productivity.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Portion Control</h1>
            <ul>
                <li class="body-text"><b>Approach:</b> You are meticulous about portion sizes, often using measuring tools like cups or scales to ensure accuracy. This helps you meet your dietary goals, whether it's for weight management, energy optimization, or maintaining overall balance.</li>
                <li class="body-text"><b>Why it works:</b> Portion control aligns with your need for precision and structure, helping you avoid overeating while ensuring that each meal meets your nutritional needs.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">7. Hydration Awareness</h1>
            <ul>
                <li class="body-text"><b>Approach:</b> You are mindful of hydration, recognizing its importance for both cognitive and physical health. You may track your water intake to ensure you meet your daily hydration goals.</li>
                <li class="body-text"><b>Why it works:</b> Staying hydrated helps maintain mental clarity, focus, and physical stamina, supporting your overall health and cognitive function.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Best Eating Habits for You:</h1>
            <ol>
                <li class="body-text"><b>Meal Planning and Prepping for Efficiency:</b> Structured meal plans ensure that you can maintain a balanced diet with minimal stress or spontaneity.</li>
                <li class="body-text"><b>Paying Close Attention to Nutritional Content:</b> Focusing on nutrients like protein, fiber, and healthy fats helps you maintain both mental and physical health.</li>
                <li class="body-text"><b>Engaging in Mindful Eating to Fully Enjoy Meals:</b> Taking the time to savor meals prevents overeating and enhances your eating experience.</li>
                <li class="body-text"><b>Making Evidence-Based Diet Choices:</b> You prefer diets that are supported by research, ensuring your choices are scientifically sound.</li>
                <li class="body-text"><b>Sticking to Consistent Eating Schedules:</b> Regular meal times help you maintain energy levels and prevent fatigue.</li>
                <li class="body-text"><b>Practicing Portion Control to Avoid Overeating:</b> Measuring portions ensures you stay within your nutritional needs without exceeding them.</li>
                <li class="body-text"><b>Monitoring Hydration to Support Overall Health:</b> Tracking your water intake helps you maintain optimal physical and cognitive performance.</li>
            </ol>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Conclusion:</h1>
            <p class="body-text">
                As a <b>Practical Thinker</b>, your structured, evidence-based approach to diet and nutrition allows you to feel in control of your health. By focusing on consistency, precision, and logical decision-making, you can maximize both physical and cognitive performance while maintaining a balanced, nutritious lifestyle.
            </p>


            <!-- ----------------- 34 -37pg ---------------- -->


            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Job and Work</h1>
            <p class="body-text">
                As a <b>Practical Thinker</b>, your brain is wired for systematic, structured approaches to tasks and challenges. You thrive in roles where precision, logical analysis, and methodical problem-solving are valued. Your natural strengths lie in breaking down complex problems into manageable parts, organizing information, and applying practical solutions. Here are the types of jobs and work environments that align with your brain:
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Jobs that Require Logical and Analytical Thinking</h1>
            <p class="body-text">
                You are most comfortable in roles where you can use logic, reasoning, and structured thought processes to analyze data, solve problems, and implement solutions. Jobs in these fields often involve clear processes and measurable outcomes.
            </p>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:10px;">Job Roles:</h1>
            <ul>
                <li class="body-text"><b>Engineer (Civil, Mechanical, Electrical):</b> You enjoy solving technical problems, designing systems, and working within structured environments.</li>
                <li class="body-text"><b>Data Analyst / Data Scientist:</b> You excel in analyzing large data sets, identifying patterns, and developing data-driven strategies.</li>
                <li class="body-text"><b>Financial Analyst:</b> You are skilled in examining financial data, developing budgets, and forecasting trends based on logical analysis.</li>
                <li class="body-text"><b>Accountant / Auditor:</b> Your attention to detail and need for precision make accounting and auditing natural fits, as you involve working with data and financial systems in a methodical way.</li>
                <li class="body-text"><b>Operations Manager:</b> Managing operational processes and optimizing systems for efficiency is an ideal role for someone who prefers structure and organization.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Jobs that Involve Precision and Attention to Detail</h1>
            <p class="body-text">
                As a detail-oriented individual, you excel in jobs that require accuracy, consistency, and careful attention to every aspect of the task. You enjoy roles where each step follows a logical progression and where small details matter.
            </p>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:10px;">Job Roles:</h1>
            <ul>
                <li class="body-text"><b>Architect:</b> The combination of logical design, technical precision, and planning in architecture aligns well with your strengths.</li>
                <li class="body-text"><b>Quality Control Specialist:</b> You are naturally suited to roles where you ensure that products or services meet specific standards, as this involves detailed inspections and logical problem-solving.</li>
                <li class="body-text"><b>Pharmacist:</b> The structured, detail-oriented nature of preparing and dispensing medications fits your need for precision.</li>
                <li class="body-text"><b>Research Scientist:</b> Conducting experiments, analyzing results, and developing solutions based on meticulous data fits your logical approach to work.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Jobs with Structured Processes and Clear Procedures</h1>
            <p class="body-text">
                You perform best in environments that provide clear, defined procedures and processes. Ambiguity or rapidly changing tasks may cause discomfort, so structured roles where expectations are set and followed consistently are a good match.
            </p>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:10px;">Job Roles:</h1>
            <ul>
                <li class="body-text"><b>Project Manager:</b> Managing projects with defined timelines, resources, and goals allows you to apply your organizational skills and methodical approach.</li>
                <li class="body-text"><b>Supply Chain Manager:</b> The systematic planning and coordination involved in supply chain management match your preference for organization and process optimization.</li>
                <li class="body-text"><b>IT Systems Administrator:</b> Ensuring that IT systems function smoothly and addressing technical issues with clear protocols aligns with your structured thinking.</li>
                <li class="body-text"><b>Database Administrator:</b> The logical structuring and organization of data in a database environment fits well with your methodical, detail-oriented mindset.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Jobs Involving Practical Application and Problem-Solving</h1>
            <p class="body-text">
                You enjoy roles that allow you to take a problem, analyze it from a logical standpoint, and implement practical solutions. Jobs that combine theoretical knowledge with practical application are particularly appealing to you.
            </p>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:10px;">Job Roles:</h1>
            <ul>
                <li class="body-text"><b>Software Developer / Programmer:</b> Writing code, solving technical challenges, and developing software in a systematic way is a great fit for your logical, problem-solving nature.</li>
                <li class="body-text"><b>Mechanical Technician:</b> Working on machinery, diagnosing issues, and repairing them in a hands-on, structured manner appeals to your practical mindset.</li>
                <li class="body-text"><b>Logistics Manager:</b> Managing logistics, coordinating shipments, and solving distribution challenges fit your practical approach to complex problems.</li>
                <li class="body-text"><b>Urban Planner:</b> Planning cities and urban areas with a logical, structured approach to land use, infrastructure, and environmental sustainability fits your strengths.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Roles Involving Continuous Improvement and Efficiency</h1>
            <p class="body-text">
                As a practical thinker, you thrive in jobs that focus on improving systems, increasing efficiency, and reducing waste. Your logical mind can easily identify inefficiencies and suggest practical solutions to optimize performance.
            </p>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:10px;">Job Roles:</h1>
            <ul>
                <li class="body-text"><b>Process Improvement Specialist:</b> Analyzing workflows and developing strategies to streamline processes fits your talent for systematic problem-solving.</li>
                <li class="body-text"><b>Lean Manufacturing Consultant:</b> Reducing waste, improving production systems, and implementing efficiency models aligns with your logical thinking and attention to detail.</li>
                <li class="body-text"><b>Business Analyst:</b> You enjoy analyzing business processes, identifying bottlenecks, and suggesting improvements to drive efficiency.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Work Environments Suited for Your Brain</h1>
            <p class="body-text">
                In addition to specific jobs, the work environment itself plays a significant role in your satisfaction and productivity. Here’s what you’ll thrive on:
            </p>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:10px;">Structured and Organized Workplaces</h1>
            <ul>
                <li class="body-text">You prefer environments where tasks are well-defined, and there is minimal ambiguity. Having clear goals, set procedures, and well-organized systems allows you to focus on executing tasks efficiently.</li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Autonomy with Clear Expectations</h1>
            <ul>
                <li class="body-text">While you enjoy working independently, you perform best when expectations are clearly communicated. You prefer having a set framework within which you can operate autonomously.</li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Problem-Solving Oriented</h1>
            <ul>
                <li class="body-text">You enjoy environments that present challenges but give you the time and resources to solve problems logically. Fast-paced, reactive environments may be less appealing unless there’s a structured problem-solving element.</li>
            </ul>
            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Focus on Results and Efficiency</h1>
            <ul>
                <li class="body-text">Workplaces that prioritize results, data, and measurable outcomes suit your logical mindset. You prefer to work where performance is based on tangible achievements rather than abstract concepts.</li>
            </ul>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Conclusion:</h1>
            <p class="body-text">
                As a <b>Practical Thinker</b>, you excel in jobs and environments that provide structure, logical challenges, and opportunities for practical problem-solving. Your strengths in organization, precision, and systematic thinking will lead to success in roles that require attention to detail, logical reasoning, and methodical processes. Emphasizing jobs with clear expectations, autonomy, and a focus on results will ensure that you maximize your potential and find fulfillment in your career.
            </p>


            <!-- ---------------- 37-39pg ------------- -->


            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Subjects Preferred for Matching Career Options</h1>
            <p class="body-text">
                Based on your cognitive style and the career options that align with your strengths, here are the preferred subjects that match the corresponding career paths. These subjects emphasize logic, structure, analysis, and practical problem-solving—qualities that are core to your natural inclination.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Mathematics</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Data Analyst, Financial Analyst, Engineer, Software Developer, Accountant</li>
                <li class="body-text"><b>Why it fits:</b> Mathematics is essential for analyzing data, solving quantitative problems, and applying logical reasoning—key skills in many analytical and technical careers. Subjects like algebra, calculus, and statistics form the foundation for careers in data science, finance, and engineering.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Physics</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Engineer (Mechanical, Civil, Electrical), Research Scientist, Architect</li>
                <li class="body-text"><b>Why it fits:</b> Physics requires logical thinking, problem-solving, and understanding of natural laws. It’s crucial for engineering fields and technical roles where scientific principles are applied to real-world problems, as well as architecture and research positions that involve structural and material analysis.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Computer Science</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Software Developer, Data Scientist, IT Systems Administrator, Database Administrator</li>
                <li class="body-text"><b>Why it fits:</b> Computer Science focuses on logical problem-solving, programming, and understanding complex systems. It is essential for careers in software development, IT management, and any role that involves managing and processing information through technology.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Economics</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Financial Analyst, Business Analyst, Economist, Operations Manager</li>
                <li class="body-text"><b>Why it fits:</b> Economics involves studying data, trends, and market behaviors, providing the tools to analyze and solve business problems. Microeconomics and macroeconomics are particularly relevant for those interested in finance, business analysis, and operations management.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Accounting and Finance</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Accountant, Auditor, Financial Analyst, Tax Consultant</li>
                <li class="body-text"><b>Why it fits:</b> These subjects teach the skills of managing financial data, auditing, and taxation. They are a perfect match for roles that require precision, attention to detail, and financial management, making them crucial for careers in accounting, auditing, and financial analysis.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Engineering (Mechanical, Civil, Electrical, Software)</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Mechanical Engineer, Civil Engineer, Electrical Engineer, Software Developer</li>
                <li class="body-text"><b>Why it fits:</b> Engineering subjects emphasize the practical application of physics, mathematics, and technology to solve real-world problems. Structural design, materials science, and software development align well with your practical, methodical mindset.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">7. Statistics</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Data Scientist, Actuary, Research Analyst, Market Researcher</li>
                <li class="body-text"><b>Why it fits:</b> Statistics involves data analysis, probability, and interpretation of data trends—skills essential in research, finance, data science, and roles that require strong quantitative analysis.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">8. Business Studies</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Business Analyst, Project Manager, Operations Manager, Entrepreneur</li>
                <li class="body-text"><b>Why it fits:</b> Business Studies provides knowledge on how organizations operate, along with skills in management, strategy, and business operations. These are crucial for roles that involve managing teams, projects, or analyzing business processes.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">9. Information Technology (IT)</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> IT Systems Administrator, Database Administrator, Cybersecurity Specialist</li>
                <li class="body-text"><b>Why it fits:</b> IT covers topics such as systems management, networking, database management, and cybersecurity. These subjects prepare you for careers in technology management, where logical thinking and technical skills are vital.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">10. Chemistry</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Pharmacist, Chemical Engineer, Research Scientist</li>
                <li class="body-text"><b>Why it fits:</b> Chemistry involves methodical experimentation, precision, and a deep understanding of matter and its properties. These skills are key in pharmaceutical roles, chemical engineering, and research.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">11. Architecture</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Architect, Urban Planner</li>
                <li class="body-text"><b>Why it fits:</b> Architecture requires a mix of creative and practical skills, combining structural design with the application of engineering principles. Urban planning and environmental design also demand logical problem-solving and spatial organization.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">12. Supply Chain Management</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Logistics Manager, Supply Chain Manager, Operations Manager</li>
                <li class="body-text"><b>Why it fits:</b> Supply Chain Management focuses on the efficient flow of goods and services. It aligns with your need for organization, problem-solving, and process optimization, making it a strong subject match for roles in logistics and operations.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">13. Law</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Lawyer, Corporate Counsel, Tax Attorney</li>
                <li class="body-text"><b>Why it fits:</b> Law requires critical thinking, logical analysis, and attention to detail. Specializing in contract law, tax law, or corporate law aligns well with your preference for structured processes and precision.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">14. Urban Planning/Environmental Science</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Urban Planner, Environmental Consultant, Architect</li>
                <li class="body-text"><b>Why it fits:</b> Urban Planning and Environmental Science involve systematic problem-solving, resource management, and sustainable design—all areas where L2 dominant you excel. These subjects focus on planning, optimizing land use, and environmental sustainability.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">15. Medicine (Certain Specialties)</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Radiologist, Pathologist, Pharmacist, Medical Researcher</li>
                <li class="body-text"><b>Why it fits:</b> Medicine, particularly fields like radiology, pathology, and pharmacology, require analytical skills, attention to detail, and a structured approach to diagnosing and solving medical problems. These roles align well with your systematic thinking and preference for precision.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">16. Logistics and Operations Management</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Logistics Manager, Operations Manager, Supply Chain Analyst</li>
                <li class="body-text"><b>Why it fits:</b> These subjects involve managing the flow of goods, services, and processes efficiently. The focus on organization and optimizing operations aligns perfectly with your structured, methodical mindset.</li>
            </ul>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Conclusion:</h1>
            <p class="body-text">
                For a <b>Practical Thinker</b>, subjects that involve logical reasoning, structured processes, problem-solving, and attention to detail are the best match for your cognitive strengths. Whether in technology, engineering, business, finance, or science, focusing on these subjects will prepare you for a career path where your natural talents can shine. By aligning your subject choices with these career options, you'll be able to thrive in roles that demand precision, logical thinking, and practical application.
            </p>

            <!-- --------------- 39-42pg ------------ -->


            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Careers Suitable</h1>
            <p class="body-text">
                Based on your brain type, you excel in careers that require logical thinking, precision, organization, and methodical problem-solving. These careers typically involve structured environments, clear processes, and measurable outcomes. Here are the careers most suited to your cognitive strengths:
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Engineering Careers</h1>
            <ul>
                <li class="body-text"><b>Mechanical Engineer</b></li>
                <li class="body-text"><b>Civil Engineer</b></li>
                <li class="body-text"><b>Electrical Engineer</b></li>
                <li class="body-text"><b>Software Engineer</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> Engineering careers require a methodical, step-by-step approach to solving complex problems. Your logical thinking and attention to detail are ideal for designing systems, analyzing technical challenges, and implementing practical solutions in these fields.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Data and Analytics Careers</h1>
            <ul>
                <li class="body-text"><b>Data Analyst</b></li>
                <li class="body-text"><b>Data Scientist</b></li>
                <li class="body-text"><b>Business Intelligence Analyst</b></li>
                <li class="body-text"><b>Statistician</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> These roles require the ability to interpret data, identify patterns, and generate insights from large data sets. Your logical mindset and structured approach to problem-solving are key to succeeding in data-driven fields.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Finance and Accounting Careers</h1>
            <ul>
                <li class="body-text"><b>Financial Analyst</b></li>
                <li class="body-text"><b>Accountant</b></li>
                <li class="body-text"><b>Auditor</b></li>
                <li class="body-text"><b>Tax Consultant</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> Careers in finance and accounting involve managing numbers, analyzing financial data, and ensuring accuracy. Your attention to detail and ability to work systematically with data make you a natural fit for roles requiring precision and logic.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Technology and IT Careers</h1>
            <ul>
                <li class="body-text"><b>Software Developer</b></li>
                <li class="body-text"><b>IT Systems Administrator</b></li>
                <li class="body-text"><b>Database Administrator</b></li>
                <li class="body-text"><b>Cybersecurity Specialist</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> Technology roles rely on logical thinking, structured processes, and problem-solving abilities. Whether coding, managing IT systems, or securing networks, these careers match your strengths in organization and attention to detail.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Operations and Supply Chain Management</h1>
            <ul>
                <li class="body-text"><b>Operations Manager</b></li>
                <li class="body-text"><b>Supply Chain Manager</b></li>
                <li class="body-text"><b>Logistics Manager</b></li>
                <li class="body-text"><b>Process Improvement Specialist</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> These careers focus on optimizing processes, managing resources, and ensuring operational efficiency. Your structured approach and ability to implement systems for better workflow align with the requirements of operations and logistics roles.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Architecture and Urban Planning</h1>
            <ul>
                <li class="body-text"><b>Architect</b></li>
                <li class="body-text"><b>Urban Planner</b></li>
                <li class="body-text"><b>Environmental Designer</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> Architecture and urban planning require combining creativity with practical, structured design principles. Your logical thinking and precision in planning make these fields well-suited to your abilities in spatial design and problem-solving.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">7. Law and Legal Analysis</h1>
            <ul>
                <li class="body-text"><b>Lawyer</b></li>
                <li class="body-text"><b>Contract Specialist</b></li>
                <li class="body-text"><b>Corporate Counsel</b></li>
                <li class="body-text"><b>Tax Attorney</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> Legal careers require critical thinking, attention to detail, and the ability to logically analyze cases and laws. Specializing in corporate law, contracts, or tax law matches your preference for structured analysis and logical reasoning.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">8. Research and Scientific Careers</h1>
            <ul>
                <li class="body-text"><b>Research Scientist</b></li>
                <li class="body-text"><b>Pharmacist</b></li>
                <li class="body-text"><b>Radiologist</b></li>
                <li class="body-text"><b>Medical Researcher</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> Careers in research and science involve methodical experimentation, data analysis, and logical problem-solving. Your structured thinking and preference for detailed work align with the precision required in these roles, particularly in medical research and pharmaceutical fields.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">9. Project Management</h1>
            <ul>
                <li class="body-text"><b>Project Manager</b></li>
                <li class="body-text"><b>Program Manager</b></li>
                <li class="body-text"><b>Product Manager</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> Project management involves overseeing tasks, managing timelines, and ensuring that goals are met efficiently. Your organizational skills and systematic approach to problem-solving are ideal for coordinating teams and managing resources.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">10. Business and Strategy Careers</h1>
            <ul>
                <li class="body-text"><b>Business Analyst</b></li>
                <li class="body-text"><b>Operations Analyst</b></li>
                <li class="body-text"><b>Management Consultant</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> Business and strategy roles focus on analyzing processes, improving efficiency, and creating structured solutions to complex problems. Your logical approach and ability to assess data make these careers a good match for your analytical strengths.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">11. Logistics and Process Improvement</h1>
            <ul>
                <li class="body-text"><b>Supply Chain Analyst</b></li>
                <li class="body-text"><b>Logistics Coordinator</b></li>
                <li class="body-text"><b>Process Improvement Consultant</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> These roles require a systematic approach to optimizing supply chains, improving processes, and solving logistical challenges. Your practical, detail-oriented mindset is perfect for analyzing workflows and implementing efficient solutions.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">12. Quality Control and Compliance</h1>
            <ul>
                <li class="body-text"><b>Quality Control Specialist</b></li>
                <li class="body-text"><b>Regulatory Compliance Officer</b></li>
                <li class="body-text"><b>Process Auditor</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> These careers require precision and attention to detail to ensure that products, services, and processes meet specific standards. Your ability to work systematically and thoroughly makes you a natural fit for roles that focus on quality and compliance.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">13. Economics and Financial Planning</h1>
            <ul>
                <li class="body-text"><b>Economist</b></li>
                <li class="body-text"><b>Financial Planner</b></li>
                <li class="body-text"><b>Investment Analyst</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> Careers in economics and financial planning involve analyzing market trends, predicting economic outcomes, and managing investments. Your logical thinking and data-driven decision-making abilities align with these roles.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">14. Technical Writing and Documentation</h1>
            <ul>
                <li class="body-text"><b>Technical Writer</b></li>
                <li class="body-text"><b>Grant Writer</b></li>
                <li class="body-text"><b>Policy Analyst</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> Technical writing involves creating clear, structured documents and manuals. Your ability to explain complex concepts in a logical, organized manner makes technical writing a suitable career path for you.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">15. Environmental and Sustainability Careers</h1>
            <ul>
                <li class="body-text"><b>Environmental Consultant</b></li>
                <li class="body-text"><b>Sustainability Analyst</b></li>
                <li class="body-text"><b>Conservation Scientist</b></li>
            </ul>
            <p class="body-text">
                <b>Why it fits:</b> These careers focus on analyzing environmental impact, developing sustainable practices, and solving ecological problems. Your logical and structured approach can help develop solutions to sustainability challenges.
            </p>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Conclusion:</h1>
            <p class="body-text">
                As a <b>Practical Thinker</b>, you are naturally drawn to careers that emphasize logic, precision, structured problem-solving, and practical applications. Whether in engineering, data analysis, finance, technology, or operations, your strengths in organization and methodical thinking will help you excel in roles that require clear processes and measurable outcomes.
            </p>


            <!-- ---------------- 43-45pg --------------- -->

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Extracurricular Interests</h1>
            <p class="body-text">
                As a <b>Practical Thinker</b>, your extracurricular interests are likely to align with activities that emphasize structure, logic, problem-solving, and hands-on experiences. You may prefer activities where you can apply your practical skills, work through challenges methodically, and focus on precision and outcomes. Here are extracurricular interests that match your cognitive style:
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Robotics Club</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Robotics involves problem-solving, design, and engineering, all of which require logical thinking and methodical planning. This activity allows you to apply technical skills to build, program, and optimize robots.</li>
                <li class="body-text"><b>Skills developed:</b> Engineering, programming, teamwork, problem-solving.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Chess Club</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Chess is a game of strategy and logic, requiring players to plan moves ahead and think critically about potential outcomes. This aligns well with your preference for structure, analysis, and tactical thinking.</li>
                <li class="body-text"><b>Skills developed:</b> Strategic thinking, concentration, planning.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Mathematics Club</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> As someone who excels in logic and analysis, participating in math competitions and solving complex problems can be both challenging and fulfilling. This is a great way to hone your problem-solving skills.</li>
                <li class="body-text"><b>Skills developed:</b> Critical thinking, analytical skills, teamwork in problem-solving.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Science Club (Physics, Chemistry, or Engineering)</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> A science club, particularly one focused on physics or engineering, allows you to engage in experiments, research, and project-based learning. These activities provide opportunities for hands-on learning and logical reasoning.</li>
                <li class="body-text"><b>Skills developed:</b> Scientific research, analytical thinking, teamwork, technical skills.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Debate Club</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Debate involves forming structured arguments, presenting logical points, and critically analyzing information. These activities suit your ability to think methodically and make reasoned decisions.</li>
                <li class="body-text"><b>Skills developed:</b> Public speaking, critical thinking, logical reasoning, communication.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Business or Entrepreneurship Club</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> In a business or entrepreneurship club, you can apply logical and strategic thinking to develop business ideas, solve operational problems, and create structured business plans. These clubs also offer practical exposure to managing projects and developing solutions.</li>
                <li class="body-text"><b>Skills developed:</b> Business acumen, leadership, project management, financial analysis.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">7. Coding or Programming Club</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Coding requires logical thinking, problem-solving, and precision, all of which align with your strengths as a practical thinker. Programming challenges and developing software projects can be engaging and intellectually stimulating.</li>
                <li class="body-text"><b>Skills developed:</b> Programming, software development, critical thinking, teamwork.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">8. Environmental or Conservation Club</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> This type of club allows you to focus on solving real-world environmental issues, which often require practical solutions and structured planning. Whether through sustainability projects or research, this aligns with your logical, outcome-driven mindset.</li>
                <li class="body-text"><b>Skills developed:</b> Project management, research, environmental awareness, problem-solving.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">9. Architecture or Design Club</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Architecture and design require a blend of creative and practical skills, emphasizing logical structure, planning, and precision. This aligns with your interest in structured, hands-on projects.</li>
                <li class="body-text"><b>Skills developed:</b> Design thinking, technical drawing, planning, creativity, problem-solving.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">10. Engineering or STEM Competitions</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Participating in engineering challenges, such as bridge-building competitions or STEM (Science, Technology, Engineering, Mathematics) challenges, allows you to apply your logical problem-solving skills in a practical, competitive environment.</li>
                <li class="body-text"><b>Skills developed:</b> Engineering principles, teamwork, technical skills, logical thinking.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">11. Finance or Investment Club</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> A finance or investment club involves analyzing financial data, making strategic decisions, and studying market trends. These activities align with your logical, data-driven approach to solving problems.</li>
                <li class="body-text"><b>Skills developed:</b> Financial literacy, data analysis, decision-making, strategic planning.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">12. Technology and Innovation Club</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> This club focuses on emerging technologies and your applications. You can work on projects involving AI, cybersecurity, or innovation challenges, which allow you to apply your logical and technical skills in practical ways.</li>
                <li class="body-text"><b>Skills developed:</b> Technology application, innovation, teamwork, problem-solving.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">13. Project Management or Organizational Clubs</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Clubs that focus on project management or organizing events allow you to apply your organizational skills to coordinate teams, plan events, and manage resources. This practical, structured work aligns with your preference for logical processes.</li>
                <li class="body-text"><b>Skills developed:</b> Leadership, planning, resource management, time management.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">14. Research and Development Club</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> If you enjoy working through detailed experiments or research projects, a research club focused on scientific or technological exploration would allow you to use your logical and methodical approach to conduct in-depth studies and present findings.</li>
                <li class="body-text"><b>Skills developed:</b> Research methodology, data analysis, critical thinking, report writing.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">15. Model United Nations (MUN)</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> MUN involves debating global issues, forming logical arguments, and working with peers to propose solutions. This club allows you to use your critical thinking and analytical skills in a structured, collaborative setting.</li>
                <li class="body-text"><b>Skills developed:</b> Diplomacy, public speaking, research, teamwork.</li>
            </ul>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Conclusion:</h1>
            <p class="body-text">
                As a <b>Practical Thinker</b>, your extracurricular interests are likely to center around activities that provide opportunities for structured thinking, problem-solving, and logical analysis. Whether through robotics, debate, science, or business, these activities align with your natural strengths in organization, precision, and practical application, helping you to further develop your skills and apply them in real-world contexts.
            </p>


            <!-- ------------- 45pg ----------- -->


            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Relationship Styles</h1>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Pragmatic and Logical</h1>
            <ul>
                <li class="body-text">You approach relationships in a practical, thoughtful way. You focus on solving problems and offering solutions rather than getting caught up in emotional complexities. You prefer to communicate clearly and directly, making sure that misunderstandings are minimized.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Structured and Organized</h1>
            <ul>
                <li class="body-text">In relationships, you value routine and predictability. You often create structure around your interactions, such as scheduling time for important conversations or planning activities well in advance. This sense of order helps you feel secure and grounded.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Independent</h1>
            <ul>
                <li class="body-text">You value personal space and independence within relationships. You’re comfortable being alone and don’t feel the need for constant interaction. However, you’re reliable and present when it comes to fulfilling your commitments or supporting your partner.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Solution-Oriented</h1>
            <ul>
                <li class="body-text">When challenges arise in relationships, your natural inclination is to address them through logical problem-solving. You prefer to approach conflicts with calmness, focusing on finding practical resolutions rather than engaging in emotional debates.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Reserved with Emotions</h1>
            <ul>
                <li class="body-text">While you care deeply for those close to you, you may not openly express emotions as easily. You tend to focus on what can be done to improve situations rather than talking about feelings. Emotional expressions may come more naturally in private or through actions rather than words.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Reliable and Loyal</h1>
            <ul>
                <li class="body-text">Once you commit to a relationship, you are dependable and dedicated. Your loyalty is reflected in your consistency and the effort you put into maintaining the relationship over time.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">7. Preference for Clear Communication</h1>
            <ul>
                <li class="body-text">You value clear and direct communication, free from ambiguity. In relationships, you prefer discussing issues logically and openly, making sure both parties are on the same page.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">8. High Standards</h1>
            <ul>
                <li class="body-text">You may have high expectations for yourself and your partner when it comes to consistency and reliability. This can be a strength in maintaining a solid relationship but may also create challenges if expectations aren’t met.</li>
            </ul>

            <p class="body-text">
                These relationship tendencies reflect your practical, structured approach to life, making you a dependable partner while also valuing logic and clear communication.
            </p>


            <!-- ------------------ 46-47pg ------------------------ -->


            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Flow & Grow Basics</h1>
            <p class="body-text">
                The Flow & Grow approach for a <b>Practical Thinker</b> is designed to enhance your strengths, create structured growth, and maintain balance between personal and professional life. Understanding your brain type helps optimize how you approach decisions, communication, and overall life strategy.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Self-Awareness and Strength Identification</h1>
            <p class="body-text">
                The foundation of Flow & Grow is self-awareness. Recognizing your strengths as a Practical Thinker allows you to channel them for meaningful growth.
            </p>
            <ul>
                <li class="body-text"><b>Understanding Brain Type:</b> As a Practical Thinker, your strengths lie in applying logic to real-world scenarios, being grounded, and excelling in structured environments.</li>
                <li class="body-text"><b>Identifying Strengths:</b> You thrive when working with clear guidelines, executing step-by-step processes, and finding practical solutions. Tasks requiring planning, organization, and hands-on application suit you best.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Leveraging Practical Strengths for Growth</h1>
            <p class="body-text">
                Once you understand your strengths, the next step is to apply them to foster growth both personally and professionally.
            </p>
            <ul>
                <li class="body-text"><b>Applying Logic to Real-World Challenges:</b> Focus on using your problem-solving abilities to tackle everyday tasks efficiently. Whether it's organizing projects or optimizing routines, your practical approach adds value.</li>
                <li class="body-text"><b>Setting Realistic, Achievable Goals:</b> You’re skilled at breaking down large tasks into manageable steps. Use this strength to set practical, achievable growth goals.</li>
                <li class="body-text"><b>Monitoring and Evaluating Progress:</b> Develop systems for tracking your progress with measurable outcomes, ensuring you stay on course and can adjust when necessary.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Flow State and Optimal Performance</h1>
            <p class="body-text">
                Flow occurs when you’re fully absorbed in an activity that matches your skillset, allowing for optimal performance.
            </p>
            <ul>
                <li class="body-text"><b>Achieving Flow:</b> Flow is most easily reached when engaging in hands-on, structured activities such as planning, organizing, or implementing practical strategies.</li>
                <li class="body-text"><b>Balancing Challenge and Structure:</b> For a Practical Thinker, maintaining the right level of challenge is key. Ensure that your tasks are clear and organized to avoid frustration or boredom.</li>
                <li class="body-text"><b>Flow and Growth:</b> Regularly engaging in structured activities that challenge your skills leads to growth and efficiency, helping you meet both personal and professional goals.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Developing Effective Communication</h1>
            <p class="body-text">
                Part of growth includes learning how to communicate effectively with people of different brain types, enhancing your relationships.
            </p>
            <ul>
                <li class="body-text"><b>Adapting Communication:</b> While you prefer straightforward, solution-focused conversations, understanding when to listen and provide emotional support can improve your interpersonal relationships.</li>
                <li class="body-text"><b>Collaborative Problem-Solving:</b> Practical Thinkers excel at collaboration when solutions are the focus. Balancing logical conversations with empathy can help improve team dynamics.</li>
                <li class="body-text"><b>Clarifying Expectations:</b> Ensure that expectations and boundaries are clear in both personal and professional settings to avoid misunderstandings.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Structured Growth and Continuous Learning</h1>
            <p class="body-text">
                As a Practical Thinker, your growth is best achieved through continuous, structured learning.
            </p>
            <ul>
                <li class="body-text"><b>Engaging in Hands-On Learning:</b> Opt for practical, skill-building activities that allow for direct application, such as workshops, certifications, or real-world projects.</li>
                <li class="body-text"><b>Short-Term and Long-Term Goals:</b> Set measurable goals that align with your practical approach to development. Tracking and adjusting these goals is key to long-term success.</li>
                <li class="body-text"><b>Reflecting on Progress:</b> Regular reflection on outcomes and progress helps you fine-tune your strategies and enhance your growth over time.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Flow & Grow for Work-Life Balance</h1>
            <p class="body-text">
                The Flow & Grow approach highlights the importance of balancing practical growth with personal fulfillment.
            </p>
            <ul>
                <li class="body-text"><b>Creating Structure:</b> Use structured routines to balance work and personal life. Planning your time efficiently helps ensure both professional success and personal well-being.</li>
                <li class="body-text"><b>Focusing on Strength-Aligned Tasks:</b> Prioritize tasks that match your natural problem-solving abilities during work hours, and allow time for rest and recreation.</li>
                <li class="body-text"><b>Engaging in Hobbies:</b> Explore hobbies or personal activities that align with your practical nature, such as DIY projects, cooking, or volunteering.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Benefits of Flow & Grow for Practical Thinkers:</h1>
            <ul>
                <li class="body-text"><b>Increased Efficiency:</b> Aligning your strengths with tasks allows for efficient work and quicker decision-making.</li>
                <li class="body-text"><b>Structured Growth:</b> Through continuous learning and practical goal-setting, you can track your progress and grow sustainably.</li>
                <li class="body-text"><b>Balanced Life:</b> Creating a structured balance between work and personal life ensures long-term satisfaction and mental clarity.</li>
            </ul>

            <p class="body-text">
                By following these Flow & Grow Basics, you can leverage your <b>Practical Thinking</b> abilities to create a balanced, structured, and fulfilling personal and professional life.
            </p>


            <!-- ------------------- 49-51pg ---------------------  -->

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Basic Brain Report</h1>
            <p class="body-text">
                Your brain is naturally wired for empathy, connection, and understanding others. As an <b>Empathetic Connector, Relational Harmonizer, or Compassionate Thinker</b>, you excel in creating deep relationships, building harmony, and approaching situations from an emotionally intelligent perspective. You are highly attuned to the feelings of those around you and often act as a bridge in resolving conflicts or helping others feel heard and understood.
            </p>
            <p class="body-text">
                You thrive in environments where collaboration, communication, and emotional awareness are valued. Your strength lies in your ability to navigate complex social dynamics, offering compassion, and creating a sense of unity and shared purpose in groups. You are often relied upon to be the emotional anchor in both personal and professional contexts.
            </p>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Your Indices for Future Growth:</h1>
            <p class="body-text">
                Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Leadership: High</h1>
            <ul>
                <li class="body-text"><b>Current Strengths:</b> Your natural ability to connect with others makes you an empathetic leader who listens and values the contributions of each team member. You lead with emotional intelligence and prioritize creating a supportive, inclusive environment.</li>
                <li class="body-text"><b>Growth Potential:</b> To further enhance your leadership skills, focus on balancing empathy with assertiveness. Developing the ability to make tough decisions without losing your compassionate touch will increase your impact.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Creativity: High</h1>
            <ul>
                <li class="body-text"><b>Current Strengths:</b> Your creativity comes from your ability to think compassionately and see situations from multiple perspectives. You excel at brainstorming solutions that take into account the emotional and relational aspects of a problem.</li>
                <li class="body-text"><b>Growth Potential:</b> Expanding your creativity into areas that require innovation and strategic planning can enhance your ability to contribute in more structured environments. Don’t be afraid to push the boundaries of your creative ideas.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. GIG Potential: Moderate</h1>
            <ul>
                <li class="body-text"><b>Current Strengths:</b> You thrive in collaborative environments where connection with others is central. Freelance or gig work in areas like coaching, counseling, or community management may suit your relational strengths.</li>
                <li class="body-text"><b>Growth Potential:</b> To fully embrace gig potential, work on strengthening your ability to manage your time and projects independently. Building more self-discipline and structure around your workflow will help you excel in dynamic work settings.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Entrepreneurship: Moderate</h1>
            <ul>
                <li class="body-text"><b>Current Strengths:</b> Your relational focus can make you a successful entrepreneur in fields that rely on building strong client relationships, such as coaching, consultancy, or wellness. You naturally create trust and rapport with others.</li>
                <li class="body-text"><b>Growth Potential:</b> Strengthening your risk tolerance and decision-making under pressure will help you step into entrepreneurship more confidently. Balancing emotional intuition with business strategy will be key to long-term success.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Team Collaboration Index: High</h1>
            <ul>
                <li class="body-text"><b>Current Strengths:</b> You are a natural collaborator, always considering the perspectives and feelings of others. You excel in team environments, where your ability to foster understanding and connection helps everyone work together more effectively.</li>
                <li class="body-text"><b>Growth Potential:</b> Enhancing your ability to balance group harmony with productive conflict resolution will allow for deeper collaboration. Focus on encouraging diverse viewpoints while maintaining a unified team.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. 21st-Century Agility Index: High</h1>
            <ul>
                <li class="body-text"><b>Current Strengths:</b> You are adaptable in social and emotional environments, making it easy for you to navigate changes in team dynamics or relational shifts. You thrive in environments that require flexibility and emotional intelligence.</li>
                <li class="body-text"><b>Growth Potential:</b> To further enhance your agility, practice embracing technological tools and systems that help improve efficiency and organization. Building comfort with rapid change in technology will support your overall adaptability in fast-paced settings.</li>
            </ul>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Advanced Strategies for Growth & Development:</h1>
            <ul>
                <li class="body-text"><b>Balancing Empathy and Assertiveness:</b> Work on becoming more assertive in situations that require tough decisions. Balancing empathy with clear boundaries will increase your leadership effectiveness.</li>
                <li class="body-text"><b>Leveraging Creativity in Structured Contexts:</b> Expand your creative thinking to more strategic, structured environments. This will allow you to contribute innovative ideas in areas where organization and systems are key.</li>
                <li class="body-text"><b>Building Self-Discipline in Dynamic Roles:</b> As you explore freelancing or entrepreneurship, focus on building stronger personal discipline and organization to enhance your independence in managing multiple projects.</li>
                <li class="body-text"><b>Fostering Healthy Conflict in Teams:</b> Encourage open dialogue and diverse perspectives within teams while maintaining harmony. This will lead to more robust problem-solving and stronger team dynamics.</li>
                <li class="body-text"><b>Enhancing Comfort with Technology:</b> Embrace new tools and platforms that support your work, as this will ensure you remain agile in the fast-paced, tech-driven world.</li>
            </ul>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Conclusion: Unlocking Your Full Potential</h1>
            <p class="body-text">
                As a relational thinking individual, your strengths lie in your emotional intelligence, ability to foster deep connections, and capacity to navigate complex social dynamics. You are a compassionate leader, an empathetic collaborator, and a creative thinker who excels at bringing harmony and understanding to any environment. By focusing on areas such as assertiveness, self-discipline, and technological adaptability, you can enhance your overall effectiveness and contribute even more meaningfully to your personal and professional spaces.
            </p>


            <!-- ------------- 51-52pg ---------------- -->

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Preferred Studying and Learning Styles</h1>
            <p class="body-text">
                As an <b>Empathetic Connector, Relational Harmonizer, or Compassionate Thinker</b>, your learning style is centered around emotional connection, collaboration, and understanding the broader social or relational context of what you're studying. You excel when learning involves communication, group interactions, and a focus on human experiences.
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Collaborative Learning</h1>
            <ul>
                <li class="body-text">You thrive in environments where you can discuss ideas with others, share insights, and work together toward a common goal. Group study sessions, discussions, and peer learning are your preferred ways of understanding concepts.</li>
                <li class="body-text"><b>Preferred Study Techniques:</b> Study groups, collaborative projects, and discussion-based learning.</li>
                <li class="body-text"><b>Effective Tools:</b> Group study apps, forums, collaborative platforms like Google Docs for group notes.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Relational Learning</h1>
            <ul>
                <li class="body-text">You learn best when you can relate concepts to human experiences or emotions. Understanding how the material connects to people’s lives or society helps you grasp complex ideas more easily.</li>
                <li class="body-text"><b>Preferred Study Techniques:</b> Relating lessons to real-life scenarios, storytelling, and case studies that involve human relationships.</li>
                <li class="body-text"><b>Effective Tools:</b> Case studies, social context-based examples, documentaries, and real-life stories.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Verbal/Auditory Learning</h1>
            <ul>
                <li class="body-text">You prefer to learn through conversation, listening to others, or engaging in verbal exchanges. Discussions with peers, verbal explanations, and auditory resources help you retain information more effectively.</li>
                <li class="body-text"><b>Preferred Study Techniques:</b> Listening to lectures or audiobooks, engaging in study discussions, and explaining concepts out loud to others.</li>
                <li class="body-text"><b>Effective Tools:</b> Podcasts, educational videos, group discussions, voice notes, and audio recordings of lectures.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Emotionally Engaged Learning</h1>
            <ul>
                <li class="body-text">You engage deeply with subjects when there’s an emotional or human connection. Studying becomes more meaningful when you can link it to empathy or understanding how it affects people.</li>
                <li class="body-text"><b>Preferred Study Techniques:</b> Focus on subjects that evoke emotional response, watching interviews or documentaries that explore the human aspect of topics, and engaging in reflective exercises.</li>
                <li class="body-text"><b>Effective Tools:</b> Reflection journals, videos that explore the emotional side of subjects, biographies or human-centered studies.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Interactive Learning</h1>
            <ul>
                <li class="body-text">You enjoy hands-on, interactive learning where you can engage directly with the material or the people involved in it. Activities like role-playing or simulations help solidify your understanding.</li>
                <li class="body-text"><b>Preferred Study Techniques:</b> Role-playing exercises, interactive simulations, and real-world application activities.</li>
                <li class="body-text"><b>Effective Tools:</b> Online simulations, interactive apps, role-playing in study groups, and educational games.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Group Discussions and Seminars</h1>
            <ul>
                <li class="body-text">You prefer environments where open discussions and the exchange of ideas are encouraged. You learn best when you can bounce ideas off others and hear diverse perspectives.</li>
                <li class="body-text"><b>Preferred Study Techniques:</b> Participating in seminars, debates, and study groups that involve open conversations.</li>
                <li class="body-text"><b>Effective Tools:</b> Webinars, group chats, online forums, and seminar-style classes.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">7. Reflective Learning</h1>
            <ul>
                <li class="body-text">Reflection is key to your learning process. Taking time to reflect on your personal connection to the material, how it resonates with your emotions, and the impact it has on people helps reinforce your understanding.</li>
                <li class="body-text"><b>Preferred Study Techniques:</b> Journaling about what you’ve learned, reflecting on personal experiences, and discussing your thoughts with others.</li>
                <li class="body-text"><b>Effective Tools:</b> Reflection journals, guided meditation, or mindfulness exercises to reflect on lessons.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Tips to Enhance Learning:</h1>
            <ol>
                <li class="body-text"><b>Study in Groups:</b> Organize study groups to discuss material, as collaboration enhances your learning process.</li>
                <li class="body-text"><b>Relate to Real-World Experiences:</b> Try to connect abstract ideas to real-life examples, especially those that involve human relationships or social contexts.</li>
                <li class="body-text"><b>Use Audio and Visual Tools:</b> Leverage podcasts, videos, and audiobooks to engage with material in a way that aligns with your auditory and relational learning preferences.</li>
                <li class="body-text"><b>Participate in Open Discussions:</b> Engage in classroom discussions, seminars, or study groups where you can explore topics through dialogue.</li>
                <li class="body-text"><b>Reflect on What You Learn:</b> Take time to journal or discuss your feelings and thoughts about the material, which will help you retain and connect with it on a deeper level.</li>
            </ol>

            <p class="body-text">
                By aligning your study methods with these relational, collaborative, and emotionally engaged learning styles, you can enhance your ability to absorb and apply information in a way that feels natural and effective for your relational brain.
            </p>


            <!-- ----------------- 52-54pg -------------------- -->

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Communication and Behaviour</h1>
            <p class="body-text">
                As an <b>Empathetic Connector, Relational Harmonizer, or Compassionate Thinker</b>, your communication and behavior style is rooted in empathy, emotional intelligence, and the ability to connect with others on a deeper level. You prioritize harmony, understanding, and open dialogue in both personal and professional settings.
            </p>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Communication Style:</h1>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Empathetic Listener</h1>
            <ul>
                <li class="body-text">You excel at listening deeply and understanding the emotional context behind what someone is saying. People often feel heard and valued when communicating with you.</li>
                <li class="body-text"><b>Why it works:</b> Your ability to listen without judgment makes others feel comfortable sharing your thoughts and emotions, which builds trust and strengthens relationships.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Collaborative and Inclusive</h1>
            <ul>
                <li class="body-text">You prefer communication that involves collaboration and shared decision-making. You seek input from others and ensure that everyone’s voice is heard.</li>
                <li class="body-text"><b>Why it works:</b> This inclusive communication style fosters a sense of unity and encourages others to contribute openly, leading to more cooperative and engaged interactions.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Emotionally Expressive</h1>
            <ul>
                <li class="body-text">You are comfortable expressing your emotions and are often open about how you feel. This helps others understand your perspective and encourages emotional honesty in return.</li>
                <li class="body-text"><b>Why it works:</b> Your willingness to share your emotions encourages a culture of openness, allowing others to feel safe expressing your own feelings.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Supportive and Encouraging</h1>
            <ul>
                <li class="body-text">You naturally offer words of encouragement and support to others. You aim to lift others up and help them feel confident in your abilities.</li>
                <li class="body-text"><b>Why it works:</b> This behavior creates a positive atmosphere, helping people feel empowered and motivated to succeed.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Conflict-Averse, but Solution-Oriented</h1>
            <ul>
                <li class="body-text">While you may initially avoid conflict to maintain harmony, you are skilled at mediating disputes once you arise. You focus on resolving issues through understanding and empathy, ensuring all parties feel heard.</li>
                <li class="body-text"><b>Why it works:</b> Your approach to conflict ensures that issues are resolved with care and consideration, which maintains relationships and fosters a peaceful environment.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Non-Confrontational, Yet Assertive When Necessary</h1>
            <ul>
                <li class="body-text">You typically avoid confrontational approaches, preferring to address issues gently and thoughtfully. However, when necessary, you can be assertive, especially when advocating for fairness or emotional well-being.</li>
                <li class="body-text"><b>Why it works:</b> This balance allows you to handle sensitive matters effectively while still standing up for what you believe in.</li>
            </ul>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Behavioral Traits:</h1>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Nurturing and Compassionate</h1>
            <ul>
                <li class="body-text">You tend to care deeply for others and often take on the role of emotional caretaker. You’re sensitive to the needs of those around you and act to provide comfort and reassurance.</li>
                <li class="body-text"><b>Why it works:</b> Your compassion creates a supportive environment where people feel emotionally safe and understood.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Relationship-Oriented</h1>
            <ul>
                <li class="body-text">You prioritize building and maintaining strong relationships. You invest time and energy into nurturing connections with friends, family, and colleagues, often going the extra mile to ensure you feel valued.</li>
                <li class="body-text"><b>Why it works:</b> This relationship-oriented behavior helps create long-lasting and meaningful bonds with others, making you a trusted and cherished companion or colleague.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Intuitive and Perceptive</h1>
            <ul>
                <li class="body-text">You are highly attuned to the emotions of others and can often sense when someone is upset, stressed, or in need of support, even if you haven’t expressed it verbally.</li>
                <li class="body-text"><b>Why it works:</b> Your intuitive nature allows you to respond to others’ needs proactively, fostering deeper emotional connections and resolving issues before you escalate.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Peacemaker</h1>
            <ul>
                <li class="body-text">You have a natural ability to mediate disputes and bring people together, acting as the bridge between differing opinions or personalities.</li>
                <li class="body-text"><b>Why it works:</b> Your role as a peacemaker helps to diffuse tension and ensures that conflicts are handled with care, preserving relationships and promoting harmony.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Sensitive to Criticism</h1>
            <ul>
                <li class="body-text">You may be sensitive to criticism, especially when it comes from people you care about or if it feels emotionally charged. You prefer feedback to be delivered kindly and constructively.</li>
                <li class="body-text"><b>Why it works:</b> While sensitivity can sometimes make receiving feedback difficult, your openness to learning and self-improvement ultimately allows you to grow when criticism is presented constructively.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Conflict Resolver</h1>
            <ul>
                <li class="body-text">Although you may initially avoid conflict, once engaged, you excel at finding compromises and solutions that take everyone’s emotions into account. You focus on maintaining harmony while addressing the root of the issue.</li>
                <li class="body-text"><b>Why it works:</b> Your solution-oriented approach to conflict ensures that relationships remain intact, and problems are resolved with minimal emotional fallout.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Tips to Enhance Communication and Behavior:</h1>
            <ol>
                <li class="body-text"><b>Set Clear Boundaries:</b> While your empathetic nature is a strength, setting boundaries will ensure you maintain your emotional well-being and avoid becoming overwhelmed by others’ needs.</li>
                <li class="body-text"><b>Embrace Healthy Conflict:</b> While you prefer harmony, accepting that conflict can lead to growth and better relationships will help you address issues more confidently when you arise.</li>
                <li class="body-text"><b>Balance Emotional Expression with Logic:</b> While emotional communication is one of your strengths, balancing it with logical reasoning will help you navigate more rational or less emotionally-driven environments.</li>
                <li class="body-text"><b>Encourage Open Feedback:</b> While you value emotional safety, creating an atmosphere where open and constructive feedback is welcomed will help strengthen relationships and improve communication.</li>
                <li class="body-text"><b>Develop Assertiveness in Decision-Making:</b> Practice making decisions with more assertiveness while maintaining your empathetic approach. This will help you lead and guide others more effectively when necessary.</li>
            </ol>

            <p class="body-text">
                By understanding and utilizing your natural communication and behavioral tendencies as a relational thinking individual, you can create strong, emotionally intelligent connections in all areas of your life. These traits make you an invaluable source of support and understanding, both personally and professionally.
            </p>


            <!-- ------------- 54-56pg ---------------------- -->


            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Inclination for Subjects Naturally</h1>
            <p class="body-text">
                As an <b>Empathetic Connector, Relational Harmonizer, or Compassionate Thinker</b>, your natural inclination is toward subjects that focus on human interaction, relationships, empathy, and emotional intelligence. You thrive in areas that involve understanding people, communication, and the dynamics of human behavior. Here are the subjects that align with your relational and compassionate strengths:
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Psychology</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Psychology focuses on understanding human behavior, emotions, and relationships. Your interest in emotional well-being and social dynamics makes this a natural fit. You are drawn to learning about how people think, feel, and interact.</li>
                <li class="body-text"><b>Subfields of interest:</b> Counseling Psychology, Social Psychology, Developmental Psychology, Clinical Psychology.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Sociology</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Sociology explores the structures of society and the relationships between people and communities. You are likely drawn to understanding how people function in social groups and how culture, identity, and social systems shape human behavior.</li>
                <li class="body-text"><b>Subfields of interest:</b> Social Work, Community Development, Family Sociology, Cultural Studies.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Communications</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> You are naturally inclined toward improving communication and understanding how people connect. Studying communications helps you explore the best ways to convey ideas, foster understanding, and enhance interpersonal interactions.</li>
                <li class="body-text"><b>Subfields of interest:</b> Interpersonal Communication, Media Studies, Public Relations, Conflict Resolution.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Counseling and Therapy</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Your empathetic nature makes you well-suited to careers in counseling and therapy. You enjoy helping others navigate their emotions, relationships, and personal challenges, and this subject area gives you the tools to do so effectively.</li>
                <li class="body-text"><b>Subfields of interest:</b> Marriage and Family Therapy, Mental Health Counseling, Child Therapy.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Education and Teaching</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> You are naturally drawn to roles where you can help others grow, learn, and develop. Education allows you to build meaningful connections with students while fostering a supportive learning environment.</li>
                <li class="body-text"><b>Subfields of interest:</b> Early Childhood Education, Special Education, Educational Psychology.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Human Resources</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Human Resources involves managing relationships within organizations, helping to resolve conflicts, and ensuring that the workplace is supportive and harmonious. This aligns well with your relational and empathetic strengths.</li>
                <li class="body-text"><b>Subfields of interest:</b> Talent Management, Organizational Behavior, Employee Relations, Diversity and Inclusion.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">7. Social Work</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Social Work is centered around helping people in need, fostering community support, and improving social conditions. Your compassionate and supportive nature makes this subject area a natural choice.</li>
                <li class="body-text"><b>Subfields of interest:</b> Child Welfare, Community Development, Family Services, Mental Health Support.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">8. Health Sciences (Patient-Centered Care)</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Health sciences, particularly areas focused on patient care, involve direct relationships with people. You are drawn to fields that allow you to provide comfort, support, and understanding to those in need.</li>
                <li class="body-text"><b>Subfields of interest:</b> Nursing, Occupational Therapy, Hospice Care, Mental Health Nursing.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">9. Conflict Resolution and Mediation</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> You excel at resolving conflicts and helping people find common ground. This subject area teaches you structured methods for mediating disputes and improving relationships in personal, community, or organizational settings.</li>
                <li class="body-text"><b>Subfields of interest:</b> Mediation, Family Conflict Resolution, International Conflict Resolution, Workplace Mediation.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">10. Literature and Humanities</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Literature often explores the complexities of human emotions, relationships, and experiences. You may be drawn to reading and analyzing stories that focus on personal growth, emotional depth, and social interaction.</li>
                <li class="body-text"><b>Subfields of interest:</b> Literary Criticism, Creative Writing, Cultural Studies.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">11. Political Science (Human Rights Focus)</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> You are likely drawn to subjects that focus on improving the human condition and advocating for the rights of others. Political Science with a focus on human rights aligns with your desire to create a more just and compassionate world.</li>
                <li class="body-text"><b>Subfields of interest:</b> Human Rights, Social Justice, International Relations, Public Policy.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">12. Nursing and Caregiving</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Nursing and caregiving professions require a deep sense of empathy and emotional understanding. These subjects allow you to focus on the relational aspects of health care, ensuring that patients feel supported both emotionally and physically.</li>
                <li class="body-text"><b>Subfields of interest:</b> Pediatric Nursing, Geriatric Nursing, Palliative Care.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">13. Journalism (Human-Interest Focus)</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Journalism, especially in the human-interest area, allows you to tell the stories of people’s lives, emotions, and experiences. This subject is a natural fit for those who want to connect with others and convey those connections through storytelling.</li>
                <li class="body-text"><b>Subfields of interest:</b> Human Rights Journalism, Social Issues Reporting, Feature Writing.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">14. Fine Arts (Emotionally Expressive Arts)</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> You may be drawn to the arts as a means of emotional expression and connection. Through creative work, whether visual, musical, or performing arts, you can explore deep emotional and relational themes.</li>
                <li class="body-text"><b>Subfields of interest:</b> Art Therapy, Music Therapy, Creative Writing, Performing Arts.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">15. Public Health (Community Health Focus)</h1>
            <ul>
                <li class="body-text"><b>Why it fits:</b> Public health, particularly areas focused on improving the health and well-being of communities, aligns with your interest in fostering healthier, happier relationships within society.</li>
                <li class="body-text"><b>Subfields of interest:</b> Community Health, Mental Health Advocacy, Public Health Education.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Study Tips for Your Brain:</h1>
            <ul>
                <li class="body-text"><b>Engage in Discussions:</b> You learn best when you can discuss concepts with others. Engage in study groups or classroom discussions to explore different perspectives.</li>
                <li class="body-text"><b>Relate to Real-World Scenarios:</b> Choose subjects that have direct social applications or are rooted in human experiences, as this helps you understand the material on a deeper level.</li>
                <li class="body-text"><b>Use Emotional Context:</b> Connect emotionally with what you are studying by reflecting on how the material affects people and relationships. This can enhance your retention and understanding.</li>
                <li class="body-text"><b>Collaborate with Peers:</b> Group projects, collaborative learning, and teamwork will boost your engagement and learning outcomes.</li>
                <li class="body-text"><b>Focus on Case Studies and Practical Examples:</b> Whenever possible, study real-life examples, case studies, or stories that highlight human interactions and relationships.</li>
            </ul>

            <p class="body-text">
                By focusing on subjects that align with your strengths in empathy, relationships, and human connection, you’ll be able to engage deeply with the material and excel in areas where emotional intelligence and compassion are key components.
            </p>


            <!-- ------------ 56-57pg ----------------- -->


            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Diet and Nutrition</h1>
            <p class="body-text">
                Food and nutrition choices for you with a <b>Relational brain type</b> are heavily influenced by social connections, emotional well-being, and shared experiences. Here’s how you might think about food and nutrition:
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Socially-Oriented Eating</h1>
            <ul>
                <li class="body-text">You value meals that are enjoyed with others, prioritizing family gatherings, shared meals with friends, and communal cooking experiences.</li>
                <li class="body-text">You find joy in the connections that food can create, often choosing recipes that bring people together and promote a sense of belonging.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Focus on Comfort and Tradition</h1>
            <ul>
                <li class="body-text">Your food choices may be influenced by cultural traditions or comfort foods that remind you of family or community.</li>
                <li class="body-text">You likely appreciate recipes passed down through generations, enjoying the emotional connections tied to specific dishes.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Collaborative Cooking</h1>
            <ul>
                <li class="body-text">You may enjoy cooking as a social activity, inviting friends or family to join you in preparing meals. This collaborative approach enhances relationships and creates a sense of teamwork.</li>
                <li class="body-text">Participating in potlucks or group meal preparations allows you to bond with others while exploring different cuisines and flavors.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Mindful and Reflective Eating</h1>
            <ul>
                <li class="body-text">You approach meals with a focus on enjoyment and emotional satisfaction, taking the time to savor the flavors and appreciate the experience of eating.</li>
                <li class="body-text">Mindful eating practices help you connect with your food and the people around you, enhancing the overall dining experience.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Emotional Connection to Food</h1>
            <ul>
                <li class="body-text">Your choices may be influenced by how certain foods make you feel emotionally. You might gravitate toward comfort foods during times of stress or seek out healthy options that promote well-being.</li>
                <li class="body-text">Understanding the emotional impact of food helps you make choices that align with your mental and emotional health.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Community and Environmental Awareness</h1>
            <ul>
                <li class="body-text">You might prioritize foods that support local communities or sustainable practices, opting for locally sourced ingredients or organic options.</li>
                <li class="body-text">Your relational mindset leads you to consider the broader impact of your food choices on the community and environment.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">7. Nutritional Balance with a Focus on Enjoyment</h1>
            <ul>
                <li class="body-text">While you appreciate the nutritional aspects of food, you prioritize enjoyment and connection over strict dietary rules. You aim for a balanced diet that supports your well-being without sacrificing flavor or social interaction.</li>
                <li class="body-text">You are likely to include a variety of fruits, vegetables, proteins, and whole grains while ensuring that meals are enjoyable and fulfilling.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Best Eating Habits for You:</h1>
            <ul>
                <li class="body-text"><b>Share Meals with Others:</b> Focus on creating opportunities to enjoy food in social settings, enhancing relationships through shared dining experiences.</li>
                <li class="body-text"><b>Explore Culinary Traditions:</b> Embrace foods that have cultural significance or emotional ties, creating a sense of comfort and connection with your heritage or family.</li>
                <li class="body-text"><b>Cook Together:</b> Involve family and friends in the cooking process, fostering collaboration and connection while enjoying the act of preparing meals.</li>
                <li class="body-text"><b>Practice Mindful Eating:</b> Take time to savor your meals, paying attention to flavors and textures, and being present during the dining experience.</li>
                <li class="body-text"><b>Prioritize Emotional Well-Being:</b> Choose foods that not only nourish your body but also enhance your emotional health, understanding the connection between food and feelings.</li>
                <li class="body-text"><b>Support Local and Sustainable Practices:</b> Make food choices that benefit your community, such as buying from local farmers’ markets or choosing sustainable products.</li>
                <li class="body-text"><b>Maintain Nutritional Balance:</b> Aim for a diverse diet that incorporates various food groups while prioritizing enjoyment and the social aspects of eating.</li>
            </ul>

            <p class="body-text">
                By aligning your dietary choices with your relational strengths, you can create a nourishing and fulfilling eating experience that enhances both your well-being and your connections with others.
            </p>


            <!-- ------------- 57-59pg ----------------- -->


            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Job and Work</h1>
            <p class="body-text">
                As an <b>Empathetic Connector, Relational Harmonizer, or Compassionate Thinker</b>, you excel in careers that emphasize emotional intelligence, collaboration, and relationship-building. You are drawn to roles where you can connect with others, support their growth, and foster a positive environment. Here are the types of jobs and work environments that align with your strengths:
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Careers in Counseling and Therapy</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> Mental Health Counselor, Marriage and Family Therapist, School Counselor</li>
                <li class="body-text"><b>Why it fits:</b> These roles allow you to use your empathy and understanding of human emotions to help others navigate their challenges. You excel in providing support and creating safe spaces for clients to express themselves.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Education and Teaching</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> Teacher, Special Education Instructor, Educational Consultant</li>
                <li class="body-text"><b>Why it fits:</b> In education, you can make a significant impact on students' lives by fostering a supportive learning environment. Your ability to connect with students on an emotional level enhances their learning experience.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Human Resources</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> HR Manager, Employee Relations Specialist, Talent Development Consultant</li>
                <li class="body-text"><b>Why it fits:</b> HR roles focus on building positive workplace relationships and supporting employee well-being. Your natural ability to empathize and understand others makes you effective in resolving conflicts and promoting a healthy work culture.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Social Work</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> Social Worker, Community Outreach Coordinator, Child Welfare Advocate</li>
                <li class="body-text"><b>Why it fits:</b> Social work is centered around helping individuals and communities improve their circumstances. Your compassion and desire to support others align perfectly with the mission of social work.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Healthcare Professions</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> Nurse, Occupational Therapist, Physician Assistant</li>
                <li class="body-text"><b>Why it fits:</b> In healthcare, you have the opportunity to care for patients and support their emotional and physical well-being. Your ability to connect with patients enhances their experience and fosters trust.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Public Relations and Communications</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> Public Relations Specialist, Community Manager, Communications Director</li>
                <li class="body-text"><b>Why it fits:</b> These roles require strong interpersonal skills and the ability to build relationships with the public, clients, and stakeholders. Your empathetic communication style helps you convey messages effectively and foster positive interactions.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">7. Nonprofit and Community Organizations</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> Program Coordinator, Fundraising Manager, Community Development Director</li>
                <li class="body-text"><b>Why it fits:</b> Working in nonprofits allows you to focus on social causes and community well-being. Your passion for helping others and building connections can drive positive change in your community.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">8. Mediation and Conflict Resolution</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> Mediator, Conflict Resolution Specialist, Family Mediator</li>
                <li class="body-text"><b>Why it fits:</b> In mediation roles, you use your relational skills to help parties find common ground and resolve disputes. Your ability to empathize and understand different perspectives is essential in these situations.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">9. Creative Arts (Therapeutic)</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> Art Therapist, Music Therapist, Drama Therapist</li>
                <li class="body-text"><b>Why it fits:</b> Using the arts as a form of therapy allows you to connect with clients emotionally and creatively. Your compassionate nature can help clients express themselves and heal through creative outlets.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">10. Customer Service and Client Relations</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> Customer Service Representative, Account Manager, Client Success Manager</li>
                <li class="body-text"><b>Why it fits:</b> These roles require strong interpersonal skills and the ability to understand customer needs. Your empathetic approach enhances client relationships and ensures satisfaction.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">11. Research in Social Sciences</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> Social Researcher, Policy Analyst, Market Researcher</li>
                <li class="body-text"><b>Why it fits:</b> Research roles that focus on human behavior and social dynamics align with your interest in understanding and improving human interactions. Your analytical skills combined with empathy can yield valuable insights.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">12. Leadership and Team Management</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> Team Leader, Project Manager, Program Director</li>
                <li class="body-text"><b>Why it fits:</b> In leadership positions, you can guide and inspire teams while fostering collaboration and emotional support. Your relational strengths will help you create a cohesive and motivated group.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">13. Life Coaching and Personal Development</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> Life Coach, Wellness Coach, Career Coach</li>
                <li class="body-text"><b>Why it fits:</b> Coaching roles allow you to guide individuals in their personal and professional growth. Your empathy and understanding enable you to provide valuable insights and support to help others achieve their goals.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">14. Event Planning</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> Event Coordinator, Wedding Planner, Community Event Organizer</li>
                <li class="body-text"><b>Why it fits:</b> Event planning involves coordinating with various stakeholders and ensuring that every detail is attended to. Your relational skills help you understand client needs and create memorable experiences.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">15. Advocacy and Activism</h1>
            <ul>
                <li class="body-text"><b>Examples:</b> Advocacy Coordinator, Community Organizer, Human Rights Advocate</li>
                <li class="body-text"><b>Why it fits:</b> Working in advocacy allows you to promote social justice and connect with individuals who are affected by various issues. Your compassion drives you to support those in need and make a difference in their lives.</li>
            </ul>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Work Environment Preferences:</h1>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Collaborative Atmosphere</h1>
            <ul>
                <li class="body-text">You thrive in environments that emphasize teamwork and collective problem-solving. A supportive workplace culture encourages open communication and fosters strong relationships.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Flexible and Supportive Environment</h1>
            <ul>
                <li class="body-text">You prefer workplaces that allow for flexibility in work arrangements and prioritize employee well-being. This creates a supportive atmosphere conducive to emotional health.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Positive and Inclusive Culture</h1>
            <ul>
                <li class="body-text">You excel in environments where diversity, inclusion, and respect for all individuals are prioritized. A positive culture enhances your ability to connect with others and feel valued.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Opportunities for Growth and Development</h1>
            <ul>
                <li class="body-text">You seek roles that offer opportunities for personal and professional development, allowing you to expand your skills and make a meaningful impact on others.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Emphasis on Emotional Intelligence</h1>
            <ul>
                <li class="body-text">Workplaces that value emotional intelligence and interpersonal skills align well with your strengths, allowing you to contribute meaningfully while fostering connection and understanding.</li>
            </ul>

            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Conclusion:</h1>
            <p class="body-text">
                As a relational thinker, you are naturally inclined toward careers that emphasize empathy, connection, and relationship-building. Your strengths in emotional intelligence and collaboration make you an asset in various roles focused on helping others and creating positive social dynamics. By pursuing career paths that align with your relational strengths, you can thrive in environments where you make a meaningful impact on individuals and communities.
            </p>



            <!-- ---------------- 60-61pg -------------------------- -->



            <h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Subjects Preferred for Matching Career Options</h1>
            <p class="body-text">
                As an <b>Empathetic Connector, Relational Harmonizer, or Compassionate Thinker</b>, your natural inclination is toward subjects that emphasize human interaction, emotional intelligence, and understanding the dynamics of relationships. You thrive in areas that allow you to connect with others and foster a sense of community. Here are the preferred subjects that align with your strengths and the corresponding career options:
            </p>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">1. Psychology</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Counselor, Psychologist, Social Worker, Human Resources Specialist</li>
                <li class="body-text"><b>Why it fits:</b> Psychology focuses on understanding human behavior, emotions, and relationships. Your interest in empathy and social dynamics makes this subject a natural choice, allowing you to support others effectively.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">2. Sociology</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Social Researcher, Community Organizer, Public Policy Analyst, Social Worker</li>
                <li class="body-text"><b>Why it fits:</b> Sociology explores societal structures and relationships, allowing you to analyze how people interact within communities. Your desire to understand social dynamics aligns perfectly with this field.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">3. Communications</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Public Relations Specialist, Marketing Coordinator, Communications Director, Community Manager</li>
                <li class="body-text"><b>Why it fits:</b> Communications studies focus on effective interaction and relationship-building. This subject allows you to enhance your skills in conveying messages and fostering connections, essential for many relational roles.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">4. Education</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Teacher, Educational Consultant, Special Education Teacher, School Counselor</li>
                <li class="body-text"><b>Why it fits:</b> Education enables you to support the growth and development of others, creating meaningful connections with students. Your empathy and desire to make a difference fit well within this subject area.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">5. Human Resources</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> HR Manager, Talent Development Specialist, Employee Relations Manager, Diversity and Inclusion Consultant</li>
                <li class="body-text"><b>Why it fits:</b> HR focuses on managing relationships within organizations and fostering a positive workplace culture. Your relational strengths help create supportive environments for employees.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">6. Social Work</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Social Worker, Community Service Manager, Child Welfare Advocate, Mental Health Counselor</li>
                <li class="body-text"><b>Why it fits:</b> Social work is centered around helping individuals and communities improve their well-being. Your compassion and desire to support others make this subject area a natural fit.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">7. Public Health</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Public Health Educator, Community Health Worker, Health Policy Analyst, Epidemiologist</li>
                <li class="body-text"><b>Why it fits:</b> Public health emphasizes improving community well-being and health outcomes. Your interest in community dynamics aligns well with this field, allowing you to make a significant impact.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">8. Conflict Resolution and Mediation</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Mediator, Conflict Resolution Specialist, Family Therapist, Organizational Development Consultant</li>
                <li class="body-text"><b>Why it fits:</b> This subject focuses on understanding and resolving conflicts between individuals or groups. Your empathetic nature makes you effective in facilitating conversations and finding solutions.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">9. Arts and Humanities</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Art Therapist, Music Therapist, Cultural Organizer, Writer</li>
                <li class="body-text"><b>Why it fits:</b> The arts provide a means of emotional expression and connection. Your ability to understand emotions can enhance your work in therapeutic and creative roles.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">10. Environmental Studies</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Environmental Educator, Conservation Scientist, Sustainability Coordinator, Community Organizer</li>
                <li class="body-text"><b>Why it fits:</b> This subject involves understanding the relationship between communities and their environments. Your passion for social causes can drive efforts in sustainability and community development.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">11. Political Science</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Political Analyst, Community Advocate, Legislative Assistant, Public Policy Manager</li>
                <li class="body-text"><b>Why it fits:</b> Political science allows you to understand societal structures and advocate for change. Your desire to create positive social impacts aligns well with this subject area.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">12. Creative Writing</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Author, Copywriter, Content Creator, Scriptwriter</li>
                <li class="body-text"><b>Why it fits:</b> Creative writing allows you to express your understanding of human experiences and emotions. This subject helps you convey messages and stories that resonate with others.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">13. Theatre and Performance Arts</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Actor, Director, Drama Therapist, Arts Educator</li>
                <li class="body-text"><b>Why it fits:</b> The performing arts involve deep emotional expression and storytelling, allowing you to connect with audiences on an emotional level while exploring human experiences.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">14. Nutrition and Wellness</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Nutritionist, Wellness Coach, Health Educator, Community Health Advocate</li>
                <li class="body-text"><b>Why it fits:</b> This subject focuses on promoting health and well-being within communities. Your interest in emotional health can drive efforts to educate others about nutrition and wellness.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">15. Marketing (Focus on Social Impact)</h1>
            <ul>
                <li class="body-text"><b>Related Career Paths:</b> Social Media Manager, Brand Strategist, Marketing Coordinator, Community Engagement Specialist</li>
                <li class="body-text"><b>Why it fits:</b> Marketing allows you to connect with audiences and promote messages that resonate emotionally. Your understanding of relational dynamics can enhance your effectiveness in this field.</li>
            </ul>

            <h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Study Tips for You:</h1>
            <ul>
                <li class="body-text"><b>Engage in Group Discussions:</b> Collaborate with peers to explore concepts, as you learn best through interaction and shared insights.</li>
                <li class="body-text"><b>Connect to Real-World Experiences:</b> Relate your studies to real-life situations, emphasizing the emotional and relational aspects of the material.</li>
                <li class="body-text"><b>Participate in Collaborative Projects:</b> Group projects will enhance your learning experience and allow you to leverage your relational strengths.</li>
                <li class="body-text"><b>Focus on Emotional Context:</b> Pay attention to the emotional implications of what you're studying, as this will deepen your understanding and retention.</li>
                <li class="body-text"><b>Utilize Creative Outlets:</b> Explore subjects that allow for creative expression, as this aligns with your desire for emotional connection and engagement.</li>
            </ul>

            <p class="body-text">
                By focusing on subjects that align with your strengths in empathy, connection, and relational understanding, you can find fulfilling career paths that resonate with your natural inclinations.
            </p>


            <!-- ---------------------- 62-64pg ------------------ -->

        <?php
        endif;
        ?>

    </div>

</body>

</html>
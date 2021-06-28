<!DOCTYPE html>
<!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
    <head>
        
         <title>My Blog</title>
     <!--   (Laravel 8) This commented link below doesn't work as tutorial says in laracasts
        <link rel="stylesheet" herf="/app.css"> try one of them from below three (from stackoverflow)

        <link rel="stylesheet" type="text/css" href="{{ url('/app.css') }}"> -->

        <link href="./app.css" rel="stylesheet">
       

       <!-- This one work as well
           <link href="{{ asset('/app.css') }}" rel="stylesheet">-->

          
        

    
    </head>
    <body>
        <article>
       <!--<h1><a herf="/post"> My First Post</a></h1>, Simple html linking seems to be not working in laravel 8, got a solution from snapey(https://laracasts.com/discuss/channels/general-discussion/how-to-create-link-with-blade-templating)-->
        <h1> <a href="{!!url('/posts/my-first-post'); !!}">My First Post</a></h1>
       
            <p> সাম্প্রতিক কয়েকটি হত্যার ঘটনায় পরিবারের সদস্যদের মধ্যে আন্তসম্পর্কের ঘাটতি, পারস্পরিক সন্দেহ-অবিশ্বাস, ক্ষোভ ও হতাশাকে প্রধান কারণ হিসেবে চিহ্নিত করা হয়েছে। গত তিন মাসে গণমাধ্যমে প্রকাশিত ১৪টি খুনের ঘটনা বিশ্লেষণ করে এমনটি বলেছেন তদন্তসংশ্লিষ্ট পুলিশ কর্মকর্তারা।

                উল্লিখিত ১৪ ঘটনায় ২২ জন খুন হয়েছেন। সর্বশেষ রাজধানীর পুরান ঢাকার কদমতলীতে মা, বাবা ও বোনকে খুনের ঘটনায়ও প্রধান সন্দেহভাজন হিসেবে গ্রেপ্তার হন পরিবারেরই একজন নারী সদস্য। এখানেও ঘনিষ্ঠ স্বজনদের ওপর রাগ, ক্ষোভ ও অনৈতিক সম্পর্কের সন্দেহ নিষ্ঠুর সিদ্ধান্তের পেছনে কাজ করেছে বলে তদন্ত কর্মকর্তার দাবি। কোনো কোনো হত্যার ঘটনায় নৃশংসতাও দেখা গেছে।
            </p>
        </article>

        <article>
        <h1> <a href="{!!url('/posts/my-second-post'); !!}">My Second Post</a></h1>
                <p> The Bangladesh Bank introduced the Green Transformation Fund (GTF) fund in 2016 to provide finance for environment-friendly infrastructures in export-oriented industries, but factory owners in sectors other than textiles have shown little interest in borrowing from it.

                    Loans disbursed from the Tk3,720 crore fund stood at only Tk778 crore as of December last year, which was 21% of the total fund size.

                    Entrepreneurs have said the stringent conditions set for obtaining loans from the fund as well as a lack of proper knowledge on the part of many of them about the fund are the major reasons why exporters have not been showing much interest in the loan.
                </p>
        </article>

        <article>
        <h1> <a href="{!!url('/posts/my-third-post'); !!}">My Third Post</a></h1>
                <p> رفضت إيران مطالب الوكالة الدولية للطاقة الذرية بالرد الفوري على طلبها بتمديد الاتفاق الذي انتهى مؤخرا بشأن مراقبة المواقع النووية الإيرانية.

وقال رئيس الوكالة الدولية للطاقة الذرية، رافاييل غروسي، إنه من الضروري أن يبقى المفتشون قادرين على جمع البيانات  .

وقالت الولايات المتحدة إنه من المهم أن تظل الوكالة الدولية للطاقة الذرية قادرة على ضمان امتثال إيران لالتزاماتها النووية.

ونقلت وكالة أنباء تسنيم الإيرانية شبه الرسمية، عن سفير إيران لدى الوكالة، كاظم غريب أبادي، قوله "إن إيران غير مجبرة على الامتثال" لطلب رئيس الوكالة.

وكانت إيران خفضت مستوى التعاون الدولي في فبراير/شباط، ردا على العقوبات الأمريكية المفروضة عليها
                </p>
        </article>
      <!--  <script src="/app.js"></script>-->
    </body>
</html>

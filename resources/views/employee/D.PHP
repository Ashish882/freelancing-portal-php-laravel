<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multilpe Select</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" />
   
</head>
<body>

    <style>
        .mul-select{
            width: 100%;
        }
    </style>

<div class="html ui top attached segment"><div class="ui fluid dropdown selection multiple" tabindex="0"><select name="skills" multiple="">
        <option value="">Skills</option>
<option value="angular">Angular</option>
<option value="css">CSS</option>
<option value="design">Graphic Design</option>
<option value="ember">Ember</option>
<option value="html">HTML</option>
<option value="ia">Information Architecture</option>
<option value="javascript">Javascript</option>
<option value="mech">Mechanical Engineering</option>
<option value="meteor">Meteor</option>
<option value="node">NodeJS</option>
<option value="plumbing">Plumbing</option>
<option value="python">Python</option>
<option value="rails">Rails</option>
<option value="react">React</option>
<option value="repair">Kitchen Repair</option>
<option value="ruby">Ruby</option>
<option value="ui">UI Design</option>
<option value="ux">User Experience</option>
      </select><i class="dropdown icon"></i><div class="default text">Skills</div><div class="menu transition hidden" tabindex="-1"><div class="item" data-value="angular">Angular</div><div class="item" data-value="css">CSS</div><div class="item" data-value="design">Graphic Design</div><div class="item" data-value="ember">Ember</div><div class="item" data-value="html">HTML</div><div class="item" data-value="ia">Information Architecture</div><div class="item" data-value="javascript">Javascript</div><div class="item" data-value="mech">Mechanical Engineering</div><div class="item" data-value="meteor">Meteor</div><div class="item" data-value="node">NodeJS</div><div class="item" data-value="plumbing">Plumbing</div><div class="item" data-value="python">Python</div><div class="item" data-value="rails">Rails</div><div class="item" data-value="react">React</div><div class="item" data-value="repair">Kitchen Repair</div><div class="item" data-value="ruby">Ruby</div><div class="item" data-value="ui">UI Design</div><div class="item" data-value="ux">User Experience</div></div></div><div class="ui top attached label">Example <i data-content="Copy code" class="copy link icon"></i></div></div>



<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous"></script>

  <script>
  
  $('.ui.dropdown').dropdown('show');

  </script>
     
</body>
</html>
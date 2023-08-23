(function() {
    // código básico para imitar un select por defecto:
    function getClosestMatch(target, className) {
      return target.classList.contains(className) ?
         target :
         target.closest('.' + className);
    }
  
    function getDropdown(target, bypass) {
       if (target.className.startsWith('dropdown-') && !bypass) return;
       return getClosestMatch(target, 'dropdown');
    }
    
    function getDropdownOption(target) {
       return getClosestMatch(target, 'dropdown-option');
    }
    
    function handlePopup(dropdown, close) {
      var popup = dropdown.querySelector('.dropdown-options');
      if (popup) {
          if (close) popup.classList.remove('open');
          else popup.classList.toggle('open');
      }
    }
    
    function toggle(dropdown) {
      if (dropdown) handlePopup(dropdown, false);
      else document.querySelectorAll('.dropdown')
             .forEach(function (item) {
               handlePopup(item, true);
             });
    }
    
    function handleDropdownClick(e) {
      var dropdown = getDropdown(e.target);
      if (dropdown) toggle(dropdown);
      else toggle();
    }
    
    function handleOptionClick(e) {
      var option = getDropdownOption(e.target);
  
      if (option) {
        var dropdown = getDropdown(option, true);
        dropdown.querySelector('input').value = option.dataset.value;
        dropdown.querySelectorAll('.dropdown-option').forEach(function(op) {
          op.classList.remove('selected');
        });
        option.classList.add('selected');
      }
    }
    
    // con esta función muestras las imágenes de las banderas:
    function displayOptionFlags() {
      document.querySelectorAll('.dropdown-option')
        .forEach(function(option) {
          var flag = option.dataset.flag;
          if (flag) {
            var img = document.createElement('img');
            img.src = flag;
            img.width = 16;
            img.height = 12;
            option.appendChild(img);
          }
        });
    }
  
    document.addEventListener('click', function(e) {
      handleDropdownClick(e);
      handleOptionClick(e);
    });
    
    displayOptionFlags();
  })();
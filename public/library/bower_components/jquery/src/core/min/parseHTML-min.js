define(["../core","./var/rsingleTag","../manipulation"],function(e,n){return e.parseHTML=function(r,t,o){if(!r||"string"!=typeof r)return null;"boolean"==typeof t&&(o=t,t=!1),t=t||document;var a=n.exec(r),i=!o&&[];return a?[t.createElement(a[1])]:(a=e.buildFragment([r],t,i),i&&i.length&&e(i).remove(),e.merge([],a.childNodes))},e.parseHTML});
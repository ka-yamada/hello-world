<%@ page import="java.util.Date" %>
<%@ page import="java.util.Locale" %>
<%
  String lang = request.getParameter("language");
  if ( "en".equals(lang) )
    {
    session.setAttribute("userLocale",Locale.ENGLISH);
    // redirect to remove the ?userLocale= parameter
    response.sendRedirect("index.jsp");
    return;
    }
  else if ( "en-US".equals(lang) )
    {
    session.setAttribute("userLocale",Locale.US);
    // redirect to remove the ?userLocale= parameter
    response.sendRedirect("index.jsp");
    return;
    }
  else if ( "fr".equals(lang) )
    {
    session.setAttribute("userLocale",Locale.FRENCH);
    // redirect to remove the ?userLocale= parameter
    response.sendRedirect("index.jsp");
    return;
    }
  else if ( "de".equals(lang) )
    {
    session.setAttribute("userLocale",Locale.GERMAN);
    // redirect to remove the ?userLocale= parameter
    response.sendRedirect("index.jsp");
    return;
    }
  else if ( "ja".equals(lang) )
    {
    session.setAttribute("userLocale",Locale.JAPANESE);
    // redirect to remove the ?userLocale= parameter
    response.sendRedirect("index.jsp");
    return;
    }
  else if ( "browser".equals(lang) )
    {
    session.removeAttribute("userLocale");
    // redirect to remove the ?userLocale= parameter
    response.sendRedirect("index.jsp");
    return;
    }
%>
<%
  System.out.println("locale = " + pageContext.getResponse().getLocale());
%>
<HTML>
<HEAD>
  <TITLE>Examples of I18N Custom Tag Library Tag Usage</TITLE>
</HEAD>
<BODY>
The <b>i18n</b> tag library contains tags to support internationalization and localization.
<hr/>
Current userLocale is <b><%= session.getAttribute("userLocale") %></b>.
Please select one of the following locales to test:<br>
(<a href="index.jsp?language=en">English</a>)
(<a href="index.jsp?language=en-US">US English</a>)
(<a href="index.jsp?language=fr">French</a>)
(<a href="index.jsp?language=de">German</a>)
(<a href="index.jsp?language=ja">Japanese</a>)
(<a href="index.jsp?language=browser">Browser Default</a>)
<hr/><p/>
<a href="bundle_standard.jsp">Message Tags Example Page</a><br/>
<a href="format.jsp">Format Tags Example Page</a><br/>
<a href="bundle_multiple.jsp">View Multiple Bundles in Action</a>
    <a href="bundle_multiple.txt">(source)</a><br/>
<a href="bundle_contents.jsp">Show Bundle Contents</a>
    <a href="bundle_contents.txt">(source)</a><br/>
</BODY>
</HTML>

<%-- 
    Document   : index
    Created on : Feb 27, 2014, 1:25:32 AM
    Author     : acer
--%>
<%@page import ="java.sql.*"%>
<%@page import ="newpackage.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="images/favicon.ico">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>Problems || Online Judge</title>

    </head>
    <body>

        <div id="topNav">	
            <ul>
                <li><a href="welcome.jsp" title="Home">home</a></li>
                <li><a href="problems.jsp">problems</a></li>
                
                <li><a href="addproblem.jsp">add problems</a></li>
                <li><a href="submit.jsp">submit</a></li>
                <li><a href="showSubmissions.jsp" class="hover">submissions</a></li>
                <li><a href="logout.jsp" title="Logout">logout </a></li>

            </ul>
        </div>

        <div id="body">
            <img src="images/logo.gif" alt="OnlineJudge" width="309" height="47" border="0" class="logo" />

            <div class='bodyText'>                
                <br>
                <%
                SubmissionsList SList = new SubmissionsList();
                ResultSet rs = null;
                rs = SList.generateList(); 
                int i = 0;
                %>
                    
                    <table>
                        <col width="20px">
                        <col width="180px">
                        <col width="100px">
                        <col width="80px">
                        <col width="50px">
                        <col width="150px">
                        <tr>
                            <td>ID</td>
                            <td>Submission Time</td>
                            <td>User </td>
                            <td>Problem ID</td>
                            <td>Language</td>
                            <td>Verdict</td>
                        </tr>                        
                                            
                    <%
                    while(rs.next() && i++<9){
                        %>
                        <tr>
                            <td> Hello world%> </td>
                             <td> Hello world%> </td>
                              <td> <%out.println(rs.getString("User"));%> </td>
                               <td> <%out.println(rs.getString("ProblemID"));%> </td>
                            <td> <%out.println(rs.getString("Language"));%></td>
                            
                             <%
                             String verdict = rs.getString("Verdict");
                             String color = "black";
                             if(verdict.equals("Accepted")) color = "green";
                             else if(verdict.equals("Wrong Answer") || verdict.equals("Wrong answer"))color = "red";
                             else if(verdict.equals("Time Limit Exceeded")) color = "blue";
                             else if(verdict.equals("Runtime Error")) color = "red";
                             else if(verdict.equals("Compilation Error")) color = "orange";                                                                                       
                             
                    %>
                    <td style="color:<%out.println(color);%>" > <%out.println(verdict);%>  </td>
                                   
                        </tr>
                    <%}
                    
                                    SList.stopCon();
%>
                                        
                    </table>
                    
                <br>
            </div>



        </div>
        <br class="spacer" />	
        <div id="footer">
            <div class="footer">
                <ul>
                <li><a href="welcome.jsp" title="Home" class="hover">home</a>|</li>
                <li><a href="problems.jsp" class="hover">problems</a>|</li>
                <li><a href="logout.jsp" title="Logout">logout</a></li>

                </ul>
                <p align='center'>&copy;Online Problem Archive and Judge</p>
                <p align='center'> All rights reserved. </p>
                <br class="spacer" />
            </div>
        </div>
    </body>
</html>
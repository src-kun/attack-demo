
# 跨源资源共享

标签： [cors](https://developer.mozilla.org/zh-CN/docs/Web/HTTP/Access_control_CORS)

---

## 简介
&#8194;&#8194;&#8194;&#8194;[Access-Control-Allow-Origin](https://developer.mozilla.org/zh-CN/docs/Web/HTTP/Headers/Access-Control-Allow-Origin)配置错误时，将资源暴露到所有或受限域的Web应用程序，用于在其它域上对资源进行Ajax请求，而不是源域。


## 检测
&#8194;&#8194;&#8194;&#8194;抓取数据包查看response中Access-Control-Allow-Origin内容
```
HTTP/1.1 200 OK
Server: nginx
Date: Fri, 26 Jan 2018 03:28:05 GMT
Content-Type: application/json
Connection: close
Vary: Accept-Encoding
Access-Control-Allow-Credentials: true
Access-Control-Allow-Headers: Origin
Access-Control-Allow-Headers: Content-Type
Access-Control-Allow-Headers: Accept
Access-Control-Allow-Headers: Authorization
Access-Control-Allow-Headers: X-Request-With
Access-Control-Allow-Methods: GET
Access-Control-Allow-Methods: HEAD
Access-Control-Allow-Methods: POST
Access-Control-Allow-Methods: PUT
Access-Control-Allow-Methods: DELETE
Access-Control-Allow-Origin: http://attack.com/
Access-Control-Expose-Headers: Origin
Access-Control-Expose-Headers: Content-Type
Access-Control-Expose-Headers: Accept
Access-Control-Expose-Headers: Authorization
Access-Control-Expose-Headers: X-Request-With
Access-Control-Expose-Headers: X-Access-Token-Timeout
Access-Control-Expose-Headers: X-Access-Token
Access-Control-Expose-Headers: Pagination-Total
Access-Control-Expose-Headers: Pagination-Count
Access-Control-Expose-Headers: Pagination-PerPage
Access-Control-Expose-Headers: Pagination-CurrentPage
Access-Control-Expose-Headers: Pagination-TotalPages
Cache-Control: private, must-revalidate
Pagination-Count: 20
Pagination-CurrentPage: 1
Pagination-PerPage: 20
Pagination-Total: 1881
Pagination-TotalPages: 95
ETag: W/"4beb7b971aeebfa28aaf40e9c05c1535"
X-Clockwork-Id: 1516937285.0383.1419139292
X-Clockwork-Version: 1.14.2
Server-Timing: app=556.64587020874; "Application", db=488.63; "Database", timeline-event-total=556.72192573547; "Total execution time."
Content-Length: 15898
```
分析上面数据包，http://attack.com/ 攻击者可以通过ajax访问受害者接口，窃取数据。

## 防范
- **验证传递给xmlhttprequest.open网址。当前的浏览器允许这些URL是跨域的；这种行为可能导致远程攻击者的代码注入。特别注意绝对URL。**

- **确保URL与访问控制响应允许源：*不包括任何敏感内容或信息，可能有助于攻击者进一步攻击。使用访问控制只允许在需要跨域访问的URL中选择源标头。不要在整个域中使用头文件。**

- **只允许访问控制中选定的受信任域允许源标头。喜欢白名单域黑名单或允许任何域（不使用*通配符也不盲目返回原点标题内容无任何检查）。记住，CORS并不妨碍请求的数据去验证的位置。这对服务器执行通常的CSRF的预防仍然是重要的。**

- **虽然RFC建议使用选项谓词进行预请求，但当前实现可能不执行此请求，因此“普通”（GET和POST）请求执行任何必要的访问控制是很重要的。**
- **丢弃基于HTTP源于普通HTTP的请求，以防止混合内容错误。**

- **不要仅依赖于访问控制检查的源标头。浏览器一直给这头CORS请求，但可能欺骗浏览器之外。应用级协议应用于保护敏感数据。**   

## 攻击

将test.html和cstf文件放到同一目录，访问test.html完成攻击。

[test.html 攻击脚本](https://test)

[csrf.html payload](https://test)

## 参考：
- [Exploiting Misconfigured CORS](http://www.geekboy.ninja/blog/exploiting-misconfigured-cors-cross-origin-resource-sharing/)
- [CORS: Attack scenarios](http://gerionsecurity.com/2013/11/cors-attack-scenarios/)
- [跨域资源共享(CORS)安全性浅析](http://www.freebuf.com/articles/web/18493.html)
- [HTML5_Security_Cheat_Sheet](https://www.owasp.org/index.php/HTML5_Security_Cheat_Sheet#Cross_Origin_Resource_Sharing)

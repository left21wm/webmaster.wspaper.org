---
id: 187
title: 기사 목록에서 허공을 클릭해도 기사로 들어가던 문제 해결
date: 2009-12-30T13:36:30+00:00
author: 노동자 연대 웹마스터
layout: post
guid: http://work.local/webmaster/?p=187
permalink: /archives/187
tistory_id:
  - 57
categories:
  - 개발 이야기
tags:
  - 노동자 연대
  - 유저 인터페이스
  - 인터페이스
  - 클릭
  - 허공 클릭
---
이건 예전에 웹마스터였던 연두님이 지적해 주셨던 겁니다.

지난 호 보기의 목록 보기 코너나, 검색 결과 페이지 등에서 허공을 클릭해도 링크로 이동하던 문제(?)가 있었습니다. 말로는 잘 설명이 안 되니까 그림을 보시죠.

<div style="width: 550px" class="wp-caption aligncenter">
  <img src="http://work.local/webmaster/wp-content/uploads/1/cfile29.uf.136335484D08473D187B45.jpg" width="540" height="129" alt="" />
  
  <p class="wp-caption-text">
    △빨간 화살표가 있는 지점에 마우스 커서가 있는데도 왼쪽 제목에 밑줄이 갔습니다. 링크에 마우스 커서를 올려 놓은 효과를 낸 것이죠.
  </p>
</div>

위 구조로 돼 있을 때 문제는 말입니다. 저 허공에 클릭을 하면 해당 기사로 이동해 버린다는 점이죠.

그런데 사람들은 흔히 글을 읽을 때 마우스로 드래그를 해서 문장을 선택했다 지웠다 하죠. 아래 처럼 말입니다.

<div style="width: 550px" class="wp-caption aligncenter">
  <img src="http://work.local/webmaster/wp-content/uploads/1/cfile6.uf.122150474D08473D3564DA.jpg" width="540" height="67" alt="" />
  
  <p class="wp-caption-text">
    △이런 식으로 드래그 선택했다가 안 했다가 하면서 글을 읽는 것입니다.
  </p>
</div>

그런데 허공을 클릭해도 기사로 이동한다면? 네. 드래그하려고 허공을 클릭했다가 사용자의 의도와 무관하게 기사로 들어가버리는 현상이 발생하게 되는 것이죠. 연두님이 이를 지적했던 것입니다.

최근에 이 문제를 해결했습니다. 이제는 허공을 클릭했다고 기사로 들어가버리고 하는 일은 없을 것입니다.

## 기술이 아니라 관점의 문제

사용하기 좋은 웹사이트에는 획기적인 기술이 필요한 게 아닙니다.(물론 기술이 뛰어나면 더 사용성이 좋은 효과를 가미할 수 있으니까 운용할 수 있는 기능이 많아지긴 합니다만 핵심은 아니라고 생각합니다.)

관리자가 얼마나 사용자의 입장에서 고민하고 인터페이스를 만드는가가 중요하다고 생각합니다.

그래서 피드백이 많은 사이트를 관리하고 있는 저는 꽤 유리한 입장에서 사이트의 인터페이스를 고민할 수 있다는 생각이 드네요. ^^ 독자분들께 감사드리며, 혹시라도 제안하실 게 있다면 <a href="http://work.local/webmaster/entry/report-and-proposal" target="_blank">홈페이지 오류신고, 개선사항 제안 페이지</a>를 이용해 달라고 말씀드리겠습니다.

그럼 이만.
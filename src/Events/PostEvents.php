<?php

namespace Chatter\Core\Events;

class PostEvents
{
    const PRE_CREATE = 'chatter.post.pre_create';
    const POST_CREATE = 'chatter.post.post_create';
    const PRE_UPDATE = 'chatter.post.pre_update';
    const POST_UPDATE = 'chatter.post.post_update';
    const PRE_REACTION = 'chatter.post.pre_reaction';
    const POST_REACTION = 'chatter.post.post_reaction';
}
